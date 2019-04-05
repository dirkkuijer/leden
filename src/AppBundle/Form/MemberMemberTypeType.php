<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MemberMemberTypeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fromDate', DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('tillDate', DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('reason', TextareaType::class)
            ->add('memberType', EntityType::class, [
                'class' => 'AppBundle:MemberType',

                // uses the User.username property as the visible option string
                'choice_label' => 'typeFunction',
            ])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MemberMemberType'
        ));
    }

    /**
     * Dit block is voor de benaming in twig. Alles klein
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_membermembertype';
    }


}
