<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Member;
use AppBundle\Entity\MemberMemberType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Member controller.
 *
 * @Route("member")
 */
class MemberController extends Controller
{
    /**
     * Lists all memberentities.
     *
     * @Route("/", name="member_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $member = $em->getRepository('AppBundle:Member')->findAll();

        return $this->render('member/index.html.twig', array(
            'member' => $member,
        ));
    }

    /**
     * Creates a new member entity.
     *
     * @Route("/new", name="member_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
       
        $member = new Member();
       
        $form = $this->createForm('AppBundle\Form\MemberType', $member);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($member);
            $em->flush();
            
            // Added by Dirk
            $state = "Persoon is toegevoegd.";
            $this->showFlash($state);
            
            return $this->redirectToRoute('member_show', array('id' => $member->getId()));
            
        }
        // // added by Sander
        // else if ($form->isSubmitted()) {
        //     dump($form->getErrors(true, false)); die();
        // }

        return $this->render('member/new.html.twig', array(
            'member' => $member,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a member entity.
     * 
     * @Route("/{id}", name="member_show")
     * @Method("GET")
     */
    public function showAction(Member $member)
    {
        $deleteForm = $this->createDeleteForm($member);
        
        return $this->render('member/show.html.twig', array(
            'member' => $member,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing member entity.
     *
     * @Route("/{id}/edit", name="member_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Member $member)
    {
       
        $editForm = $this->createForm('AppBundle\Form\MemberType', $member);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            
            // added by Dirk
            $state = "Persoon is aangepast.";
            
            $this->showFlash($state);
            
            return $this->redirectToRoute('member_show', array('id' => $member->getId()));
            
        }

        return $this->render('member/edit.html.twig', array(
            'member' => $member,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a member entity.
     *
     * @Route("/{id}", name="member_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Member $member)
    {
        $form = $this->createDeleteForm($member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($member);
            $em->flush();
            
            
        }
        $state = "Persoon is verwijderd.";
         // added by Dirk
         $this->showFlash($state);
        
        return $this->redirectToRoute('member_index');
    }

    /**
     * Creates a form to delete a member entity.
     *
     * @param Member $member The member entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Member $member)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('member_delete', array('id' => $member->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    // added by Dirk to show flash messages after submitting form
    public function showFlash(String $state) {
        return $this->addFlash('success', $state);
    }
}
