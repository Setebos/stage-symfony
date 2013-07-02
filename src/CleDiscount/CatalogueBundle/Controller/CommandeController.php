<?php

namespace CleDiscount\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommandeController extends Controller {
    
    public function commandeAction() {
        return $this->render('CleDiscountCatalogueBundle:Commande:commande.html.twig');
    }
    
    public function panierAction() {
        return $this->render('CleDiscountCatalogueBundle:Commande:panier.html.twig');
    }
    
    public function faqcommandeAction() {
        return $this->render('CleDiscountCatalogueBundle:Commande:faqcommande.html.twig');
    }
}

?>