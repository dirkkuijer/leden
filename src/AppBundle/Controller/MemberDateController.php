<?php

namespace AppBundle\Controller;

use AppBundle\Entity\MemberDate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Memberdate controller.
 *
 * @Route("memberdate")
 */
class MemberDateController extends Controller
{
    /**
     * Lists all memberDate entities.
     *
     * @Route("/", name="memberdate_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $memberDates = $em->getRepository('AppBundle:MemberDate')->findAll();

        return $this->render('memberdate/index.html.twig', array(
            'memberDates' => $memberDates,
        ));
    }

    /**
     * Creates a new memberDate entity.
     *
     * @Route("/new", name="memberdate_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $memberDate = new Memberdate();
        $form = $this->createForm('AppBundle\Form\MemberDateType', $memberDate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($memberDate);
            $em->flush();

            return $this->redirectToRoute('memberdate_show', array('id' => $memberDate->getId()));
        }

        return $this->render('memberdate/new.html.twig', array(
            'memberDate' => $memberDate,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a memberDate entity.
     *
     * @Route("/{id}", name="memberdate_show")
     * @Method("GET")
     */
    public function showAction(MemberDate $memberDate)
    {
        $deleteForm = $this->createDeleteForm($memberDate);

        return $this->render('memberdate/show.html.twig', array(
            'memberDate' => $memberDate,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing memberDate entity.
     *
     * @Route("/{id}/edit", name="memberdate_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, MemberDate $memberDate)
    {
        $deleteForm = $this->createDeleteForm($memberDate);
        $editForm = $this->createForm('AppBundle\Form\MemberDateType', $memberDate);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('memberdate_edit', array('id' => $memberDate->getId()));
        }

        return $this->render('memberdate/edit.html.twig', array(
            'memberDate' => $memberDate,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a memberDate entity.
     *
     * @Route("/{id}", name="memberdate_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, MemberDate $memberDate)
    {
        $form = $this->createDeleteForm($memberDate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($memberDate);
            $em->flush();
        }

        return $this->redirectToRoute('memberdate_index');
    }

    /**
     * Creates a form to delete a memberDate entity.
     *
     * @param MemberDate $memberDate The memberDate entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MemberDate $memberDate)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('memberdate_delete', array('id' => $memberDate->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
