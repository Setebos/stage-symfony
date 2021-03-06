<?php

namespace CleDiscount\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller {
    
    public function contactAction() {
        return $this->render('CleDiscountCatalogueBundle:Contact:contact.html.twig');
    }
    
    public function mentionsAction() {
        return $this->render('CleDiscountCatalogueBundle:Contact:mentions.html.twig');
    }    
    
    public function recrutementAction() {
        return $this->render('CleDiscountCatalogueBundle:Contact:recrutement.html.twig');
    }  
    
    public function partenairesAction() {
        return $this->render('CleDiscountCatalogueBundle:Contact:partenaires.html.twig');
    }  
    
    public function referencementAction() {
        return $this->render('CleDiscountCatalogueBundle:Contact:referencement.html.twig');
    }  
    
    public function serviceclientAction() {
        return $this->render('CleDiscountCatalogueBundle:Contact:serviceclient.html.twig');
    }  
    
    public function servicecommercialAction() {
        return $this->render('CleDiscountCatalogueBundle:Contact:servicecommercial.html.twig');
    }  
}

?>