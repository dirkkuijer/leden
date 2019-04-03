<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MemberMemberTypeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fromDate', DateType::class)
            ->add('tillDate', DateType::class)
            ->add('reason', TextareaType::class)
            // ->add('memberDate')
            // ->add('typeMember')
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
