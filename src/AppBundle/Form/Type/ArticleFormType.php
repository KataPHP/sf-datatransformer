<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, ['label' => 'title'])
            ->add('author', TextType::class, ['label' => 'Author'])
            ->add('body', TextareaType::class, ['label' => ''])
            ->add('publishedAt', TextType::class, ['label' => 'Published (format: DD-MM-YYYY)'])
            ->add('tags', TextType::class, ['label' => 'Tags (separate with , )'])
        ;

        return $builder;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_article';
    }
}
