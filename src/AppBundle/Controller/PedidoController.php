<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Pedidos controller.
 *
 * @Route("pedido")
 */
class PedidoController extends Controller {

    /**
     * @Route("/", name="inicioPedido")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
        ]);
    }

    /**
     * @Route("/list", name="listarPedido")
     */
    public function listarPedidoAction() {

        $em = $this->getDoctrine()->getManager();
        $pedidos = $em->getRepository('AppBundle:Pedido')->findAll();
        return $this->render('pedidos/listado.html.twig', array("pedidos" => $pedidos));
    }

    /**
     * Finds and displays a pedido entity.
     *
     * @Route("/{id}", name="pedido_show")
     * @Method("GET")
     */
    public function showAction(\AppBundle\Entity\Pedido $pedido) {
        
        return $this->render('pedidos/listarDetalles.html.twig', array(
        'pedido' => ($pedido)));
    }

}
