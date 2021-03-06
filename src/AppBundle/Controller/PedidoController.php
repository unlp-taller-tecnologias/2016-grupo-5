<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pedido;
use AppBundle\Entity\DetallePedido;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pedido controller.
 *
 * @Route("pedido")
 */
class PedidoController extends MainController
{
    /**
     * Lists all pedido entities.
     *
     * @Route("/", name="pedido_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pedidos = $em->getRepository('AppBundle:Pedido')->findOrderAll();

        return $this->frontRender('pedido/index.html.twig', array(
            'pedidos' => $pedidos,
        ));
    }

    /**
     * Creates a new pedido entity.
     *
     * @Route("/new", name="pedido_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pedido = new Pedido();
        $em = $this->getDoctrine()->getManager();
        $msj = null;
        if ($request->isMethod('POST')) {
            $productos = $request->request->get('producto') != null;
            if ($productos) {
              $proveedor = $em->getRepository('AppBundle:Proveedor')->findOneById($request->request->get('proveedor'));
              $pedido->setProveedor($proveedor);
              $em->persist($pedido);
              $em->flush();
              foreach ($request->request->get('producto') as $id => $cant) {
                $detallePedido = new DetallePedido();
                $detallePedido->setPedido($pedido);
                $detallePedido->setCantidadPedida($cant);
                $producto = $em->getRepository('AppBundle:Producto')->findOneById($id);
                $detallePedido->setProducto($producto);
                $em->persist($detallePedido);
                $em->flush();
                $pedido->adddetalle($detallePedido);
              }
              $em->persist($pedido);
              $em->flush();
              return $this->showAction($pedido);
            }else{
              $msj = "Error: Por favor ingrese productos en el pedido";
            }
        }
        $proveedors = $em->getRepository('AppBundle:Proveedor')->findAllActive();
        return $this->frontRender('pedido/new.html.twig', array(
            'pedido' => $pedido,
            'proveedors' => $proveedors,
            'msj' => $msj
        ));
    }

    /**
     * Close a pedido entity.
     *
     * @Route("/close/{id}", name="pedido_close")
     * @Method({"GET", "POST"})
     */
    public function closeAction(Request $request, Pedido $pedido)
    {
        if ($pedido->getFechaCierre()) {
          return $this->showAction($pedido);
        }else{
          $em = $this->getDoctrine()->getManager();
          if ($request->isMethod('POST')) {
              $cant= $request->request->get('cant');
              $pedido->setFechaCierre(new \DateTime());
              foreach ( $pedido->getDetalle() as $detallePedido) {
                $id = $detallePedido->getId();
                $detallePedido->setCantidadRecibida($cant[$id]);
                $detallePedido->getProducto()->addStock($cant[$id]);
                $em->persist($detallePedido);
                $em->persist($detallePedido->getProducto());
              }
              $em->flush();
              return $this->indexAction();
          }
          return $this->frontRender('pedido/close.html.twig', array(
              'pedido' => $pedido,
          ));
      }
    }
    /**
     * print a pedido entity.
     *
     * @Route("/print/{id}", name="pedido_print")
     * @Method({"GET"})
     */
    public function printAction(Pedido $pedido)
    {
        $em = $this->getDoctrine()->getManager();
        $html = $this->renderView('pedido/print.html.twig', array(
            'pedido'  => $pedido
        ));
        $proveedorName= str_replace(" ", "",ucwords(strtolower($pedido->getProveedor()->getNombre())));
        $name = "pedido_".$proveedorName."_".$pedido->getFechaApertura()->format('m-d-Y').".pdf";
        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename='.$name
            )
        );
    }

    /**
     * Finds and displays a pedido entity.
     *
     * @Route("/{id}", name="pedido_show")
     * @Method("GET")
     */
    public function showAction(Pedido $pedido)
    {
        return $this->frontRender('pedido/show.html.twig', array(
            'pedido' => $pedido,
        ));
    }

}
