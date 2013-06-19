<?php

namespace CleDiscount\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogueController extends Controller {
    
    public function catalogueAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:catalogue.html.twig');
    }
    
    public function quincaillerieAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:quincaillerie.html.twig');
    }
    
    public function porteblindeeAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:porteblindee.html.twig');
    }
    
    public function reproductionAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:reproduction.html.twig');
    }
    
    public function produitshygieneAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:produitshygiene.html.twig');
    }
}

?>