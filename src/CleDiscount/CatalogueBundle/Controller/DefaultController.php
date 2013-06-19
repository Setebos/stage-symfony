<?php

namespace CleDiscount\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CleDiscountCatalogueBundle:Default:index.html.twig', array('name' => $name));
    }
}
