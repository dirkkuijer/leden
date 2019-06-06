<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
        
        $form = $this->createForm(ContactType::class);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $contactFormData = $form->getData();
            
            $message = (new \Swift_Message('Contactformulier BMK'))
               ->setFrom($contactFormData['email'], $contactFormData['name'])
               ->setTo('baarnsmannenkoor@outlook.com')
               ->setSubject($contactFormData['subject'])
               ->setBody(
                   $contactFormData['message'],
                   'text/plain'
               )
               ->setReplyTo($contactFormData['email'])
               ->addBcc($contactFormData['email'])
           ;

           $mailer->send($message);
           
           $state = "E-mail is verzonden.";
           // added by Dirk
           $this->showFlash($state);
   
           return $this->render('user/help.html.twig', [
            'form' => $form->createView()
        ]);
           
        } else {
               return $this->render('contact.html.twig', [
                   'form' => $form->createView()
               ]);
                $state = "Probeer het opnieuw! Verzenden mislukt.";
                $this->showFlash($state);
        }
        
    }

      // added by Dirk to show flash messages after submitting form
      public function showFlash(String $state) {
        return $this->addFlash('success', $state);
    }
}