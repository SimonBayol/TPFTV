<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text', ['required' => true]);
        $builder->add('leadingText', 'textarea', ['required' => false]);
        $builder->add('body', 'textarea', ['required' => false]);
        $builder->add('createdBy', 'text', ['required' => true]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => 'AppBundle\Entity\Article',
                'csrf_protection' => false,
            ]);

    }

    public function getName()
    {
        return 'app_article_create';
    }
}
