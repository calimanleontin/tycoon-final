<?php

namespace Tycoon\CatalogBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\HttpFoundation\JsonResponse;

use Tycoon\AccessBundle\Entity\User;
use Tycoon\CatalogBundle\Entity\Attribute;
use Tycoon\CatalogBundle\Entity\Fighter;
use Tycoon\CatalogBundle\Entity\Product;
use Tycoon\CatalogBundle\Entity\Subscription;
use Tycoon\CatalogBundle\Form\AttributesListType;
use Tycoon\CatalogBundle\Form\CompareType;
use Tycoon\CatalogBundle\Form\ProductType;
use Tycoon\CatalogBundle\Repository\AttributeRepository;
use Tycoon\CatalogBundle\Repository\ProductRepository;

/**
 * Class ProductController
 * @package Tycoon\CatalogBundle\Controller
 */
class ProductController extends Controller
{
    /**
     * @return Response
     */
    public function listAction(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var ProductRepository $productRepo */
        $productRepo = $em->getRepository('TycoonCatalogBundle:Product');

        /** @var AttributeRepository $attributesRepo */
        $attributesRepo = $em->getRepository('TycoonCatalogBundle:Attribute');

        /** @var array $attributes */
        $attributes = $attributesRepo
            ->getAttributesQuery()
            ->getQuery()
            ->getResult();

        $attributesNames = array();

        /** @var array $attribute */
        foreach ($attributes as $attribute) {
            $attributesNames[] = $attribute['name'];
        }

        $attributesList = null;

        $pagesCount = null;

        /** @var int $page */
        $page = isset($_GET['page']) ? $_GET['page'] : '1';

        /** @var int $resultsPerPage */
        $resultsPerPage = 12;

        if ($_GET != null) {
            /** @var array $formValues */
            $formValues = $_GET;

            $attributesList = array();

            $hasFilters = false;

            /**
             * @var mixed $key
             * @var string $formRow
             */
            foreach ($formValues as $key => $formRow) {
                if (!in_array(substr($key, 3), $attributesNames)) {
                    continue;
                }

                if (strncmp($key, 'min', 3) == 0) {
                    $attributesList[substr($key, 3)]['min'] = $formRow;
                } elseif (strncmp($key, 'max', 3) == 0) {
                    $attributesList[substr($key, 3)]['max'] = $formRow;
                }

                $attributesL[$key] = $formRow;

                $hasFilters = true;
            }
        }

        if (isset($hasFilters) && $hasFilters == true) {
            /** @var int $productsCount */
            $productsCount = $productRepo
                ->getProductListChoiceQuery($attributesList, true)
                ->getQuery()
                ->getSingleScalarResult();
        } else {
            /** @var int $productsCount */
            $productsCount = $productRepo->getProductsCount();
        }

        /** @var int $pagesCount */
        $pagesCount = ceil($productsCount / $resultsPerPage);

        if ($productsCount <= $resultsPerPage || $page == 0) {
            $page = 1;
        } elseif ($page > $pagesCount) {
            $page = $pagesCount;
        }

        /** @var int $offset */
        $offset = 0;

        if ($page > 1) {
            $offset = $resultsPerPage * ($page - 1);
        }

        if (isset($hasFilters) && $hasFilters != 0) {
            /** @var array $productIds */
            $productIds = $productRepo
                ->getProductListChoiceQuery($attributesList, false, true, $offset, $resultsPerPage)
                ->getQuery()
                ->getResult();
        } else {
            /** @var array $productIds */
            $productIds = $productRepo
                ->getProductIdsQuery($offset, $resultsPerPage)
                ->getQuery()
                ->getResult();
        }

        $productIdsArray = array();

        /** @var int $productId */
        foreach ($productIds as $productId) {
            $productIdsArray[] = $productId['id'];
        }

        /** @var array $products */
        $products = $productRepo
            ->getProductsWithIdsQuery($productIdsArray)
            ->getQuery()
            ->getResult();

        $attributesL['page'] = $page;

        return $this->render(
            'TycoonCatalogBundle:Product:list.html.twig',
            array(
                'products' => $products,
                'pagesCount' => $pagesCount,
                'attributesList' => $attributesL
            )
        );
    }

    /**
     * @param Request $request
     * @param string $type
     * @param int $id
     * @return Response
     * @throws NonUniqueResultException
     */
    public function editAction(Request $request, $type = 'product', $id = null)
    {
        /** @var UsernamePasswordToken $token */
        $token = $this
            ->get("security.token_storage")
            ->getToken();

        /** @var User $user */
        $user = $token->getUser();

        /** @var Session $session */
        $session = $request->getSession();

        /** @var FlashBagInterface $flashBag */
        $flashBag = $session->getFlashBag();

        if ($user instanceof User and $user->getAdminFlag() == true) {
            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();

            /** @var ProductRepository $productRepo */
            $productRepo = $em->getRepository('TycoonCatalogBundle:Product');

            if ($id === null) {
                /** @var Product $product */
                $product = $this->getProductByType($type);
            } else {
                /** @var Product $product */
                $product = $productRepo
                    ->getProductListQuery(true, true)
                    ->where('product.id = :id')
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getOneOrNullResult();

                if ($product === null) {
                    throw $this->createNotFoundException('Unable to find product.');
                }
            }

            /** @var array $initialAttributes */
            $initialAttributes = $product->getAttributes()->toArray();

            /** @var Form $form */
            $form = $this->createForm(new ProductType(), $product);
            $form->handleRequest($request);

            if ($form->isValid()) {
                /** @var ArrayCollection $attributes */
                $attributes = $product->getAttributes();

                // persist product
                $product->setAttributes(new ArrayCollection());

                $product->upload();

                $em->persist($product);

                try {
                    $em->flush();
                } catch (\Exception $e) {
                    $flashBag->add(
                        'failedInsert',
                        "The picture is already in use."
                    );

                    return $this->render(
                        'TycoonCatalogBundle:Product:edit.html.twig',
                        array(
                            'product' => $product,
                            'product_form' => $form->createView()
                        )
                    );
                }

                // persist attributes

                /** @var Attribute $attribute */
                foreach ($attributes as $attribute) {
                    if ($attribute->getUnitOfMeasurement() == null) {
                        $flashBag->add(
                            'failedInsert',
                            "You must set the 'Unit of measurement' field."
                        );

                        return $this->render(
                            'TycoonCatalogBundle:Product:edit.html.twig',
                            array(
                                'product' => $product,
                                'product_form' => $form->createView()
                            )
                        );
                    }

                    $product->addAttribute($attribute);

                    $em->persist($attribute);
                }

                $exists = array();

                /** @var Attribute $attribute */
                foreach ($attributes as $attribute) {
                    if (isset($exists[$attribute->getName()])) {
                        $flashBag->add(
                            'failedInsert',
                            "You can't set a product with two identical attributes."
                        );

                        return $this->render(
                            'TycoonCatalogBundle:Product:edit.html.twig',
                            array(
                                'product' => $product,
                                'product_form' => $form->createView()
                            )
                        );
                    } else {
                        $exists[$attribute->getName()] = 1;
                    }
                }

                // remove deleted attributes

                /** @var Attribute $initialAttribute */
                foreach ($initialAttributes as $initialAttribute) {
                    if (!$attributes->contains($initialAttribute)) {
                        $em->remove($initialAttribute);
                    }
                }

                $em->flush();

                if ($id != null) {
                    $flashBag->add(
                        'success',
                        "You successfully edited the {$product->className()} '{$product->getName()}'."
                    );
                } else {
                    $flashBag->add(
                        'success',
                        "You successfully added the {$product->className()} '{$product->getName()}'."
                    );
                }

                return $this->render(
                    'TycoonCatalogBundle:Product:edit.html.twig',
                    array(
                        'product' => $product,
                        'product_form' => $form->createView()
                    )
                );
            }

            return $this->render(
                'TycoonCatalogBundle:Product:edit.html.twig',
                array(
                    'product' => $product,
                    'product_form' => $form->createView()
                )
            );
        } else {
            $flashBag->add('warning', '403 - Forbidden: Access is denied.');

            return $this->render(
                'TycoonCatalogBundle:Product:edit.html.twig',
                array(
                    'product' => $product,
                    'product_form' => $form->createView()
                )
            );
        }
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function searchAction(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var ProductRepository $productRepo */
        $productRepo = $em->getRepository('TycoonCatalogBundle:Product');

        /** @var string $search */
        $search = $request->query->get('q');

        $separationChars = array(',', '/', '+', '\\');
        foreach ($separationChars as $separationChar) {
            $search = str_replace($separationChar, '', $search);
        }

        while (strpos($search, '  ') != 0) {
            $search = str_replace('  ', ' ', $search);
        }

        /** @var array $searchTerms */
        $searchTerms = explode(' ', $search);

        if (end($searchTerms) == '') {
            end($searchTerms);
            $key = key($searchTerms);
            unset($searchTerms[$key]);
        }

        /** @var array $products */
        $products = $productRepo
            ->getProductListBySearchQuery($searchTerms, false, true)
            ->getQuery()
            ->getResult();

        return $this->render(
            'TycoonCatalogBundle:Product:list.html.twig',
            array(
                'products' => $products
            )
        );
    }

    /**
     * @param string $type
     * @return null|Fighter|Product|Subscription
     */
    private function getProductByType($type)
    {
        $product = null;

        switch ($type) {
            case 'fighter':
                $product = new Fighter();
                $product->setStock(1);

                $attribute1 = new Attribute();
                $attribute1->setName(Fighter::STAT1);
                $attribute2 = new Attribute();
                $attribute2->setName(Fighter::STAT2);
                $attribute3 = new Attribute();
                $attribute3->setName(Fighter::STAT3);
                $attribute4 = new Attribute();
                $attribute4->setName(Fighter::STAT4);

                $product->addAttribute($attribute1);
                $product->addAttribute($attribute2);
                $product->addAttribute($attribute3);
                $product->addAttribute($attribute4);

                break;
            case 'subscription':
                $product = new Subscription();

                $attribute1 = new Attribute();
                $attribute1->setName(Subscription::STAT1);
                $attribute2 = new Attribute();
                $attribute2->setName(Subscription::STAT2);

                $product->addAttribute($attribute1);
                $product->addAttribute($attribute2);

                break;
            case 'consumable':
                $product = new Product();

                $attribute = new Attribute();
                $product->addAttribute($attribute);

                break;
        }

        return $product;
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function addToCompareAction(Request $request, $id)
    {
        /** @var Session $session */
        $session = $request->getSession();

        /** @var FlashBagInterface $flashBag */
        $flashBag = $session->getFlashBag();

        /** @var array $bucket */
        $bucket = $session->get('compare');
        if ($bucket != null) {
            /** @var int $productInBucketId */
            foreach ($bucket as $productInBucketId) {
                if ($id == $productInBucketId) {
                    $flashBag->add('warning', 'Action denied, the product is already in compare list!');

                    return $this->redirectToRoute('Catalog_Product_list');
                }
            }
        }

        $bucket[] = $id;

        $flashBag->add('success', 'Now you can compare the products.');

        $session->set('compare', $bucket);

        return $this->redirectToRoute('Catalog_Product_list');
    }

    /**
     * @param Request $request
     * @return Response
     * @throws NonUniqueResultException
     */
    public function listCompareAction(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var ProductRepository $productRepo */
        $productRepo = $em->getRepository('TycoonCatalogBundle:Product');

        /** @var string $type */
        $type = isset($_GET['type']) ? $_GET['type'] : null;

        /** @var Session $session */
        $session = $request->getSession();

        /** @var array $productsIds */
        $productsIds = $session->get('compare');

        if ($type != null) {
            $type = "Tycoon\\CatalogBundle\\Entity\\" . $type;

            if ($productsIds != null) {
                /**
                 * @var mixed $key
                 * @var string $productId
                 */
                foreach ($productsIds as $key => $productId) {
                    /** @var Product $product */
                    $product = $productRepo
                        ->getProductByIdQuery($productId, false, true)
                        ->getQuery()
                        ->getOneOrNullResult();

                    if (get_class($product) != $type) {
                        unset($productsIds[$key]);
                    }
                }
            }
        }

        $types = array();
        $types[] = 'Fighter';
        $types[] = 'Product';
        $types[] = 'Subscription';

        $products = array();

        if (isset($productsIds)) {
            /** @var int $productId */
            foreach ($productsIds as $productId) {
                $products[] = $productRepo
                    ->getProductByIdQuery($productId, false, true)
                    ->getQuery()
                    ->getOneOrNullResult();
            }
        }

        return $this->render(
            'TycoonCatalogBundle:Product:listToCompare.html.twig',
            array(
                'products' => $products,
                'types' => $types
            )
        );
    }

    /**
     * @param int $id1
     * @param int $id2
     * @return Response
     * @throws NonUniqueResultException
     */
    public function compareAction(Request $request, $id1, $id2)
    {
        if ($id1 == $id2) {
            /** @var Session $session */
            $session = $request->getSession();

            $flashBag = $session->getFlashBag();

            $flashBag->add('warning', 'Access denied.');

            return $this->redirectToRoute('Catalog_Product_listCompare');
        }

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var ProductRepository $productRepo */
        $productRepo = $em->getRepository('TycoonCatalogBundle:Product');

        $types = array();
        $types[] = 'Fighter';
        $types[] = 'Product';
        $types[] = 'Subscription';

        $ids[] = $id1;
        $ids[] = $id2;
        /** @var int $productId */
        foreach ($ids as $productId) {
            $products[] = $productRepo
                ->getProductByIdQuery($productId, false, true)
                ->getQuery()
                ->getOneOrNullResult();
        }

        if ($products[0]->className() != $products[1]->className()) {
            /** @var Session $session */
            $session = $request->getSession();

            $flashBag = $session->getFlashBag();

            $flashBag->add('warning', 'Access denied.');

            return $this->redirectToRoute('Catalog_Product_listCompare');
        }
        return $this->render(
            'TycoonCatalogBundle:Product:compare.html.twig',
            array(
                'products' => $products,
                'types' => $types
            )
        );
    }

    /**
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function eraseFromListAction(Request $request, $id)
    {
        /** @var Session $session */
        $session = $request->getSession();

        /** @var array $bucket */
        $bucket = $session->get('compare');

        /**
         * @var mixed $key
         * @var int $productId
         */
        foreach ($bucket as $key => $productId) {
            if ($id == $productId) {
                unset($bucket[$key]);

                break;
            }
        }

        /** @var FlashBag $flashBag */
        $flashBag = $session->getFlashBag();

        $flashBag->add('success', 'You successfully removed the product from the compare session');

        $session->set('compare', $bucket);

        return $this->redirectToRoute('Catalog_Product_listCompare');
    }


    public function getProductNamesAction()
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var ProductRepository $productRepo */
        $productRepo = $em->getRepository('TycoonCatalogBundle:Product');

        $productNames = $productRepo
            ->getProductNamesQuery()
            ->getQuery()
            ->getResult();

        $jsonMessage = json_encode($productNames);

        return new JsonResponse($productNames);
    }
}
