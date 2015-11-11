<?php

namespace Tycoon\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function aboutAction()
    {
        return $this->render('TycoonCatalogBundle:Page:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('TycoonCatalogBundle:Page:contact.html.twig');
    }
}
