<?php

namespace CleDiscount\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller {
    
    public function indexAction() {
        return $this->render('CleDiscountCatalogueBundle:Accueil:index.html.twig');
    }
    
    public function societeAction() {
        return $this->render('CleDiscountCatalogueBundle:Accueil:societe.html.twig');
    }
    
    public function conceptAction() {
        return $this->render('CleDiscountCatalogueBundle:Accueil:concept.html.twig');
    }
    
    public function charteAction() {
        return $this->render('CleDiscountCatalogueBundle:Accueil:charte.html.twig');
    }

}

?>
