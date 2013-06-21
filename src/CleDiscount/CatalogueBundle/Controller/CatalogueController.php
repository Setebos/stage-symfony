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
    
    public function cylindresAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:cylindres.html.twig');
    }
    
    public function monopointAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:monopoint.html.twig');
    }
    
    public function multipointsAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:multipoints.html.twig');
    }
    
    public function verrousAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:verrous.html.twig');
    }
    
    public function antieffractionAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:antieffraction.html.twig');
    }
    
    public function accessoiresAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:accessoires.html.twig');
    }
    
    public function lexiqueAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:lexique.html.twig');
    }
    
    public function coffresAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:coffres.html.twig');
    }
    
    public function fichesAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:fiches.html.twig');
    }
}

?>