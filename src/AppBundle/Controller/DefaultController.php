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

        $cantidad = $this->getDoctrine()
                ->getRepository('AppBundle:Producto')
                ->getCountStockCritico();

        $pedidosAbiertos = $this->getDoctrine()
                ->getRepository('AppBundle:Pedido')
                ->getPedidosAbiertos();

        return $this->render('default/index.html.twig', array('stockCritico' => $cantidad, 'pedidosAbiertos' => $pedidosAbiertos));
    }

}
