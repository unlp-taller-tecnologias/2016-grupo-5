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
        $repository = $this->getDoctrine()
                ->getRepository('AppBundle:Producto');

        $cantidad = $repository->getStockCritico();

        $repository2 = $this->getDoctrine()
                ->getRepository('AppBundle:Pedido');
        

        $pedidosAbiertos = $repository2->getPedidosAbiertos();
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'), 'stockCritico' => $cantidad, 'pedidosAbiertos' => $pedidosAbiertos,
        ]);
    }

}
