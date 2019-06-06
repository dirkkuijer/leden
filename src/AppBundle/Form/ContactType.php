<?php

namespace AppBundle\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\ContactType;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('email', EmailType::class,[
                'attr' => ['placeholder' => 'naam@email.nl']
            ])
            ->add('subject', ChoiceType::class, [
                'multiple' => false,
                'expanded' => false,
                'placeholder' => 'Kies een optie',
                'choices' => [
                    'Wachtwoord vergeten' => 'Wachtwoord vergeten',
                    'Persoonsgegevens' => 'Persoonsgegevens',
                    'Gebruikersgegevens' => 'Gebruikersgegevens',
                    'Vraag' => 'Vraag',
                    'Anders' => 'Anders'
                ]
            ])
            ->add('message', TextareaType::class,[
                'attr' => ['placeholder' => 'Typ uw bericht'],
                'required' => 'required'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            //'data_class' => Contact::class,
        ]);
    }
}