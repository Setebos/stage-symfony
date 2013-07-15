<?php

namespace CleDiscount\CatalogueBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use CleDiscount\CatalogueBundle\Entity\Article;

class FixtureLoader implements FixtureInterface, ContainerAwareInterface {

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {
        
        $a1 = new Article();
        $a1->setReference('Q1234');
        $a1->setFamille('e-Quincaillerie');
        $a1->setCategorie('multipoints');
        $a1->setNom('Test1');
        $a1->setDescriptif('Ceci est une description de l\'article test1');
        $a1->setMarque('Fichet');
        $a1->setPrixAchat('30');
        $a1->setPrixParticulier('90');
        $a1->setPrixPro('60');
        $a1->setImage('http://www.castorama.fr/images/products/h/h_162084.jpg');
        $a1->setFocus('Oui');
        
        $a2 = new Article();
        $a2->setReference('Q4567');
        $a2->setFamille('e-Quincaillerie');
        $a2->setCategorie('multipoints');
        $a2->setNom('Test2');
        $a2->setDescriptif('Ceci est une description de l\'article test2');
        $a2->setMarque('Abus');
        $a2->setPrixAchat('40');
        $a2->setPrixParticulier('120');
        $a2->setPrixPro('90');
        $a2->setImage('http://www.castorama.fr/images/products/h/h_162084.jpg');
        $a2->setFocus('Non');
        
        $a3 = new Article();
        $a3->setReference('Q8757');
        $a3->setFamille('e-Quincaillerie');
        $a3->setCategorie('multipoints');
        $a3->setNom('Test3');
        $a3->setDescriptif('Ceci est une description de l\'article test3');
        $a3->setMarque('Abus');
        $a3->setPrixAchat('40');
        $a3->setPrixParticulier('120');
        $a3->setPrixPro('90');
        $a3->setImage('http://www.castorama.fr/images/products/h/h_162084.jpg');
        $a3->setFocus('Oui');
        
        $a4 = new Article();
        $a4->setReference('Q976');
        $a4->setFamille('e-Quincaillerie');
        $a4->setCategorie('multipoints');
        $a4->setNom('Test4');
        $a4->setDescriptif('Ceci est une description de l\'article test4');
        $a4->setMarque('Abus');
        $a4->setPrixAchat('20');
        $a4->setPrixParticulier('60');
        $a4->setPrixPro('40');
        $a4->setImage('http://www.castorama.fr/images/products/h/h_162084.jpg');
        $a4->setFocus('Oui');
        
        $a5 = new Article();
        $a5->setReference('Q765');
        $a5->setFamille('e-Quincaillerie');
        $a5->setCategorie('multipoints');
        $a5->setNom('Test5');
        $a5->setDescriptif('Ceci est une description de l\'article test5');
        $a5->setMarque('Abus');
        $a5->setPrixAchat('40');
        $a5->setPrixParticulier('120');
        $a5->setPrixPro('90');
        $a5->setImage('http://www.castorama.fr/images/products/h/h_162084.jpg');
        $a5->setFocus('Non');
        
        $a6 = new Article();
        $a6->setReference('Q47885');
        $a6->setFamille('e-Quincaillerie');
        $a6->setCategorie('multipoints');
        $a6->setNom('Test6');
        $a6->setDescriptif('Ceci est une description de l\'article test6');
        $a6->setMarque('Abus');
        $a6->setPrixAchat('30');
        $a6->setPrixParticulier('90');
        $a6->setPrixPro('60');
        $a6->setImage('http://www.castorama.fr/images/products/h/h_162084.jpg');
        $a6->setFocus('Oui');
        
        $a7 = new Article();
        $a7->setReference('Q8757');
        $a7->setFamille('e-Quincaillerie');
        $a7->setCategorie('multipoints');
        $a7->setNom('Test7');
        $a7->setDescriptif('Ceci est une description de l\'article test7');
        $a7->setMarque('Abus');
        $a7->setPrixAchat('30');
        $a7->setPrixParticulier('90');
        $a7->setPrixPro('60');
        $a7->setImage('http://www.castorama.fr/images/products/h/h_162084.jpg');
        $a7->setFocus('Non');
        
        $manager->persist($a1);
        $manager->persist($a2);
        $manager->persist($a3);
        $manager->persist($a4);
        $manager->persist($a5);
        $manager->persist($a6);
        $manager->persist($a7);
        $manager->flush();
    }

}