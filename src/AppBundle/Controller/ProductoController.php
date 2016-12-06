<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Producto;
use AppBundle\Entity\Proveedor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Producto controller.
 *
 * @Route("producto")
 */
class ProductoController extends Controller
{
    /**
     * Lists all producto entities.
     *
     * @Route("/", name="producto_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request, Producto $producto = null)
    {
        $em = $this->getDoctrine()->getManager();

        $productos = $em->getRepository('AppBundle:Producto')->findAll();
        if (is_null($producto)) {
          $producto = new Producto;
        }
        $form = $this->createForm('AppBundle\Form\ProductoType', $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($producto);
            $em->flush();

            return $this->redirectToRoute('producto_index');
        }
        return $this->render('producto/index.html.twig', array(
            'productos' => $productos,
            'producto' => $producto,
            'form' => $form->createView(),
        ));
    }
    /**
     * get state critical product for provider.
     *
     * @Route("/ajaxConsultProduct", name="ajax_get_product")
     * @Method({"POST"})
     */
    public function ajaxProductForProviderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $provider = $request->request->get('id');
        $criticos = $em->getRepository('AppBundle:Producto')->getProductNotIdealStockFromProvider($provider);
        $bien = $em->getRepository('AppBundle:Producto')->getProductYesIdealStockFromProvider($provider);
        return new JsonResponse(array('criticos' => $criticos, 'bien'=>$bien));
    }

    /**
     * Displays a form to edit an existing producto entity.
     *
     * @Route("/{id}/edit", name="producto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Producto $producto)
    {
      return $this->indexAction($request, $producto);
    }

    /**
     * Deletes a producto entity.
     *
     * @Route("/{id}", name="producto_toggleActive")
     * @Method("GET")
     */
    public function toggleActiveAction(Producto $producto)
    {
        $em = $this->getDoctrine()->getManager();
        $producto->setActive(!$producto->getActive());
        $em->persist($producto);
        $em->flush($producto);
        return $this->redirectToRoute('producto_index');
    }

    /**
     * Creates a form to delete a producto entity.
     *
     * @param Producto $producto The producto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Producto $producto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('producto_delete', array('id' => $producto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
