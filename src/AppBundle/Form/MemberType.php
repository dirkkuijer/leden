<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use AppBundle\Form\MemberMemberTypeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MemberType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        
        $builder
                ->add('firstName')
                ->add('lastName')
                ->add('email', EmailType::class, [
                        'attr' => ['placeholder' => 'naam@mail.nl']
                ])
                ->add('street')
                ->add('houseNumber')
                ->add('houseNumberAddition')
                ->add('zipCode', null, [
                    'attr' => ['placeholder' => '1234 AB']
                ])
                ->add('city')
                ->add('telephone', null, [
                    'attr' => ['placeholder' => '123 4567890']
                ])
                ->add('dateOfBirth', BirthDayType::Class, [
                    'widget' => 'single_text',
                ])
                ->add('type', CollectionType::Class, [
                    'entry_type'    => MemberMemberTypeType::Class, 
                    'allow_add'     => true,
                    'allow_delete'  => true,
                    'prototype'     => true,
                    'by_reference'  => false,
                    'label'         => false,
                ])
                ->add('voice', EntityType::Class, [
                    'class' => 'AppBundle:Voice',
                    'choice_label' => 'typeVoice',
                ])
            ;

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Member'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_member';
    }


}
