<?php

namespace CleDiscount\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogueController extends Controller {
    
    public function catalogueAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:catalogue.html.twig');
    }
    
    /** AFFICHAGE PRODUIT **/
    
    public function produitAction($id, $famille, $categorie) {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('CleDiscountCatalogueBundle:Article')->findOneById($id);
        
        return $this->render('CleDiscountCatalogueBundle:Catalogue:produit.html.twig', array('article' => $article));
    }
    
    /** QUINCAILLERIE **/
    
    public function quincaillerieAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:quincaillerie.html.twig');
    }
    
    public function affichequincaillerieAction($categorie, $marque, $page) {
        $articles = $this->getDoctrine()
                 ->getManager()
                 ->getRepository('CleDiscountCatalogueBundle:Article')
                 ->getArticles(6, $page, $categorie, $marque);
        //var_dump($articles);
        
        return $this->render('CleDiscountCatalogueBundle:Catalogue:affichequincaillerie.html.twig', array('marque' => $marque, 'categorie' => $categorie, 'articles' => $articles, 'page' => $page, 'nombrePage' => ceil(count($articles)/6)));
    }
    
    public function porteblindeeAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:porteblindee.html.twig');
    }
    
    public function cylindresAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:cylindres.html.twig');
    }
    
    public function monopointAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:monopoint.html.twig');
    }
    
    public function multipointsAction($page) {
        $articles = $this->getDoctrine()
                 ->getManager()
                 ->getRepository('CleDiscountCatalogueBundle:Article')
                 ->getArticles(6, $page, 'multipoints');
            
        return $this->render('CleDiscountCatalogueBundle:Catalogue:multipoints.html.twig', array('articles' => $articles, 'page' => $page, 'nombrePage' => ceil(count($articles)/6)));
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
    
    /** REPRODUCTION DE CLES **/
    
    public function reproductionAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:reproduction.html.twig');
    }
    
    public function doublesAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:doubles.html.twig');
    }
    
    public function clestechniquesAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:clestechniques.html.twig');
    }
    
    public function commandecleAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:commandecle.html.twig');
    }
    
    /** PRODUITS D'HYGIENE **/
    
    public function produitshygieneAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:produitshygiene.html.twig');
    }
    
    public function affichehygieneAction($categorie, $marque, $page) {
        $articles = $this->getDoctrine()
                 ->getManager()
                 ->getRepository('CleDiscountCatalogueBundle:Article')
                 ->getArticles(6, $page, $categorie, $marque);
        //var_dump($articles);
        
        return $this->render('CleDiscountCatalogueBundle:Catalogue:affichehygiene.html.twig', array('marque' => $marque, 'categorie' => $categorie, 'articles' => $articles, 'page' => $page, 'nombrePage' => ceil(count($articles)/6)));
    }
    
    public function rongeursAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:rongeurs.html.twig');
    }
    
    public function insectesAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:insectes.html.twig');
    }
    
    public function hygieneautresAction() {
        return $this->render('CleDiscountCatalogueBundle:Catalogue:hygieneautres.html.twig');
    }
}

?>