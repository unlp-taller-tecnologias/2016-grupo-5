<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Proveedor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Proveedor controller.
 *
 * @Route("proveedor")
 */
class ProveedorController extends MainController
{
    /**
     * Lists all proveedor entities.
     *
     * @Route("/", name="proveedor_index")
     * @Method({"GET", "POST"})
     */
     public function indexAction(Request $request, Proveedor $proveedor = null)
     {
         $em = $this->getDoctrine()->getManager();

         $proveedors = $em->getRepository('AppBundle:Proveedor')->findAll();
         if (is_null($proveedor)) {
           $proveedor = new Proveedor;
         }
         $form = $this->createForm('AppBundle\Form\ProveedorType', $proveedor);
         $form->handleRequest($request);
         $msj = null;
         try{
           if ($form->isSubmitted() && $form->isValid()) {
               $em = $this->getDoctrine()->getManager();
               $em->persist($proveedor);
               $em->flush();

               return $this->redirectToRoute('proveedor_index');
           }
         } catch(\Exception $e){
           $msj="Error: El nombre ya se encuentra ocupado, no puede repetirse";
         }
         return $this->frontRender('proveedor/index.html.twig', array(
             'proveedors' => $proveedors,
             'proveedor' => $proveedor,
             'msj' => $msj,
             'form' => $form->createView(),
         ));
     }


    /**
     * Displays a form to edit an existing proveedor entity.
     *
     * @Route("/{id}/edit", name="proveedor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Proveedor $proveedor)
    {
        return $this->indexAction($request, $proveedor);
    }

    /**
     * Deletes a proveedor entity.
     *
     * @Route("/{id}", name="proveedor_toggleActive")
     * @Method("GET")
     */
    public function toggleActiveAction(Proveedor $proveedor)
    {
        $em = $this->getDoctrine()->getManager();
        $proveedor->setActive(!$proveedor->getActive());
        $em->persist($proveedor);
        $em->flush($proveedor);
        return $this->redirectToRoute('proveedor_index');
    }

    /**
     * Creates a form to delete a proveedor entity.
     *
     * @param Proveedor $proveedor The proveedor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Proveedor $proveedor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('proveedor_delete', array('id' => $proveedor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
