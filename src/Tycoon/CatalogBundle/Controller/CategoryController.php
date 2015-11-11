<?php

namespace Tycoon\CatalogBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Tycoon\AccessBundle\Entity\User;
use Tycoon\CatalogBundle\Entity\Category;
use Tycoon\CatalogBundle\Form\CategoryType;
use Tycoon\CatalogBundle\Repository\CategoryRepository;

/**
 * Class CategoryController
 * @package Tycoon\CatalogBundle\Controller
 */
class CategoryController extends Controller
{
    /**
     * @return Response
     */
    public function listAction()
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var CategoryRepository $categoryRepository */
        $categoryRepository = $em->getRepository('TycoonCatalogBundle:Category');

        /** @var array $categories */
        $categories = $categoryRepository
            ->findAll();

        return $this->render(
            'TycoonCatalogBundle:Category:list.html.twig',
            array(
                'categories' => $categories
            )
        );
    }

    /**
     * @param int $id
     * @return Response
     */
    public function listByIdAction($id)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var CategoryRepository $categoryRepository */
        $categoryRepository = $em->getRepository('TycoonCatalogBundle:Category');

        /** @var int $productsCount */
        $productsCount = $categoryRepository
            ->getProductsCount($id);

        /** @var int $page */
        $page = isset($_GET['page']) ? $_GET['page'] : '1';

        /** @var int $resultsPerPage */
        $resultsPerPage = 12;

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

        /** @var array $productIds */
        $productIds = $categoryRepository
            ->getProductIdsQuery($id, $offset, $resultsPerPage)
            ->getQuery()
            ->getResult();

        $productIdsArray = array();

        /** @var int $productId */
        foreach ($productIds as $productId) {
            $productIdsArray[] = $productId['id'];
        }

        /** @var Category $category */
        $category = $categoryRepository
            ->getProductsByCategoryIdQuery($id, $productIdsArray)
            ->getQuery()
            ->getOneOrNullResult();

        if ($category == null) {
            throw $this->createNotFoundException('Unable to find Category products.');
        }

        return $this->render(
            'TycoonCatalogBundle:Category:listById.html.twig',
            array(
                'category' => $category,
                'pagesCount' => $pagesCount,
                'page' => $page
            )
        );
    }

    /**
     * @param Request $request
     * @param null $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function editAction(Request $request, $id = null)
    {
        /** @var UsernamePasswordToken $token */
        $token = $this->get("security.token_storage")->getToken();

        /** @var User $user */
        $user = $token->getUser();

        if ($user instanceof User and $user->getAdminFlag() == true) {
            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();

            /** @var CategoryRepository $catRepo */
            $catRepo = $em->getRepository('TycoonCatalogBundle:Category');

            if ($id == null) {
                /** @var Category $category */
                $category = new Category();
            } else {
                $category = $catRepo
                    ->find($id);

                if ($category === null) {
                    throw $this->createNotFoundException('Unable to find category.');
                }
            }

            /** @var Form $form */
            $form = $this->createForm(new CategoryType(), $category);
            $form->handleRequest($request);

            if ($form->isValid()) {

                $em->persist($category);
                $em->flush();

                /** @var Session $session */
                $session = $request->getSession();

                /** @var FlashBagInterface $flashBag */
                $flashBag = $session->getFlashBag();

                $flashBag->add('success', 'You successful managed to edit the category .');

                return $this->redirectToRoute('Catalog_Product_list');
            }

            return $this->render(
                'TycoonCatalogBundle:Category:edit.html.twig',
                array(
                    'category' => $category,
                    'category_form' => $form->createView()
                )
            );
        } else {
            /** @var Session $session */
            $session = $request->getSession();

            /** @var FlashBagInterface $flashBag */
            $flashBag = $session->getFlashBag();

            $flashBag->add('warning', '403 - Forbidden: Access is denied.');

            return $this->redirectToRoute('Catalog_Product_list');
        }
    }
}
