<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="inicio")
     */
    public function indexAction(Request $request) {

        $repositoryProduct = $this->getDoctrine()->getRepository('AppBundle:Producto');
        $productos = $repositoryProduct->getCriticalProduct();
        $cantidad = count($productos);

        $repositoryOrder = $this->getDoctrine()->getRepository('AppBundle:Pedido');
        $pedidosAbiertos = $repositoryOrder->getOrdersOpen();

        $stockCritico = array('productos' => $productos, 'cantidad' => $cantidad);
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'), 'stockCritico' => $stockCritico, 'pedidosAbiertos' => $pedidosAbiertos,
        ]);
    }

}
