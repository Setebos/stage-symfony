<?php

namespace CleDiscount\CatalogueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recherche', 'text')
        ;
    }

    public function getName()
    {
        return 'clediscount_cataloguebundle_articletype';
    }
}
