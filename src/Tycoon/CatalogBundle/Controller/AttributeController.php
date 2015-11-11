<?php

namespace Tycoon\CatalogBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Tycoon\CatalogBundle\Form\AttributesListType;
use Tycoon\CatalogBundle\Repository\AttributeRepository;

/**
 * Class AttributeController
 * @package Tycoon\CatalogBundle\Controller
 */
class AttributeController extends Controller
{
    /**
     * @return Response
     */
    public function filterAction(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

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

        $filterAttributes = array();

        foreach ($_GET as $filterAttribute => $value) {
            if (strncmp('min', $filterAttribute, 3) == 0 || strncmp('max', $filterAttribute, 3) == 0) {
                if (in_array(substr($filterAttribute, 3), $attributesNames)) {
                    $filterAttributes[$filterAttribute] = $value;
                }
            }
        }

        /** @var Form $attributesForm */
        $attributesForm = $this->createForm(
            new AttributesListType(
                $attributesNames,
                $filterAttributes
            )
        );

        return $this->render(
            'TycoonCatalogBundle:Attribute:filter.html.twig',
            array(
                'attributes_list_form' => $attributesForm->createView(),
                'attributes' => $attributesNames
            )
        );
    }
}
