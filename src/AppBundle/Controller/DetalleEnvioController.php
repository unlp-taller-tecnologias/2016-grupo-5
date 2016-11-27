<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DetalleEnvio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Detalleenvio controller.
 *
 * @Route("detalleenvio")
 */
class DetalleEnvioController extends Controller
{
    /**
     * Lists all detalleEnvio entities.
     *
     * @Route("/", name="detalleenvio_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $detalleEnvios = $em->getRepository('AppBundle:DetalleEnvio')->findAll();

        return $this->render('detalleenvio/index.html.twig', array(
            'detalleEnvios' => $detalleEnvios,
        ));
    }

    /**
     * Creates a new detalleEnvio entity.
     *
     * @Route("/new", name="detalleenvio_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $detalleEnvio = new Detalleenvio();
        $form = $this->createForm('AppBundle\Form\DetalleEnvioType', $detalleEnvio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($detalleEnvio);
            $em->flush($detalleEnvio);

            return $this->redirectToRoute('detalleenvio_show', array('id' => $detalleEnvio->getId()));
        }

        return $this->render('detalleenvio/new.html.twig', array(
            'detalleEnvio' => $detalleEnvio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a detalleEnvio entity.
     *
     * @Route("/{id}", name="detalleenvio_show")
     * @Method("GET")
     */
    public function showAction(DetalleEnvio $detalleEnvio)
    {
        $deleteForm = $this->createDeleteForm($detalleEnvio);

        return $this->render('detalleenvio/show.html.twig', array(
            'detalleEnvio' => $detalleEnvio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing detalleEnvio entity.
     *
     * @Route("/{id}/edit", name="detalleenvio_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DetalleEnvio $detalleEnvio)
    {
        $deleteForm = $this->createDeleteForm($detalleEnvio);
        $editForm = $this->createForm('AppBundle\Form\DetalleEnvioType', $detalleEnvio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('detalleenvio_edit', array('id' => $detalleEnvio->getId()));
        }

        return $this->render('detalleenvio/edit.html.twig', array(
            'detalleEnvio' => $detalleEnvio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a detalleEnvio entity.
     *
     * @Route("/{id}", name="detalleenvio_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DetalleEnvio $detalleEnvio)
    {
        $form = $this->createDeleteForm($detalleEnvio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($detalleEnvio);
            $em->flush($detalleEnvio);
        }

        return $this->redirectToRoute('detalleenvio_index');
    }

    /**
     * Creates a form to delete a detalleEnvio entity.
     *
     * @param DetalleEnvio $detalleEnvio The detalleEnvio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DetalleEnvio $detalleEnvio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('detalleenvio_delete', array('id' => $detalleEnvio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
