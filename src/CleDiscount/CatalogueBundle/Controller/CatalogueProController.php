<?php

namespace CleDiscount\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogueProController extends Controller {
    
    public function catalogueproAction() {
        return $this->render('CleDiscountCatalogueBundle:CataloguePro:cataloguePro.html.twig');
    }
    
    public function presentationproAction() {
        return $this->render('CleDiscountCatalogueBundle:CataloguePro:presentationPro.html.twig');
    }
    
    public function inscriptionprivilegeAction() {
        return $this->render('CleDiscountCatalogueBundle:CataloguePro:privilege.html.twig');
    }
    
    public function destockageAction() {
        return $this->render('CleDiscountCatalogueBundle:CataloguePro:destockage.html.twig');
    }
    
    public function objetspubAction() {
        return $this->render('CleDiscountCatalogueBundle:CataloguePro:objetsPub.html.twig');
    }
    
    public function produitsmomentAction() {
        return $this->render('CleDiscountCatalogueBundle:CataloguePro:produitsMoment.html.twig');
    }
}

?>