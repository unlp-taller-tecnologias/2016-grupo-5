<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Envio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Envio controller.
 *
 * @Route("envio")
 */
class EnvioController extends Controller
{
    /**
     * Lists all envio entities.
     *
     * @Route("/", name="envio_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $envios = $em->getRepository('AppBundle:Envio')->findAll();

        return $this->render('envio/index.html.twig', array(
            'envios' => $envios,
        ));
    }

    /**
     * Creates a new envio entity.
     *
     * @Route("/new", name="envio_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $envio = new Envio();
        $form = $this->createForm('AppBundle\Form\EnvioType', $envio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($envio);
            $em->flush($envio);

            return $this->redirectToRoute('envio_show', array('id' => $envio->getId()));
        }

        return $this->render('envio/new.html.twig', array(
            'envio' => $envio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a envio entity.
     *
     * @Route("/{id}", name="envio_show")
     * @Method("GET")
     */
    public function showAction(Envio $envio)
    {
        $deleteForm = $this->createDeleteForm($envio);

        return $this->render('envio/show.html.twig', array(
            'envio' => $envio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing envio entity.
     *
     * @Route("/{id}/edit", name="envio_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Envio $envio)
    {
        $deleteForm = $this->createDeleteForm($envio);
        $editForm = $this->createForm('AppBundle\Form\EnvioType', $envio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('envio_edit', array('id' => $envio->getId()));
        }

        return $this->render('envio/edit.html.twig', array(
            'envio' => $envio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a envio entity.
     *
     * @Route("/{id}", name="envio_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Envio $envio)
    {
        $form = $this->createDeleteForm($envio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($envio);
            $em->flush($envio);
        }

        return $this->redirectToRoute('envio_index');
    }

    /**
     * Creates a form to delete a envio entity.
     *
     * @param Envio $envio The envio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Envio $envio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('envio_delete', array('id' => $envio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
