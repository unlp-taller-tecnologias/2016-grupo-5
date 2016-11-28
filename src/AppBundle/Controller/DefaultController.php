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
<<<<<<< HEAD

        $repositoryProduct = $this->getDoctrine()->getRepository('AppBundle:Producto');
        $productos = $repositoryProduct->getCriticalProduct();
        $cantidad = count($productos);

        $repositoryOrder = $this->getDoctrine()->getRepository('AppBundle:Pedido');
        $pedidosAbiertos = $repositoryOrder->getOrdersOpen();

        $stockCritico = array('productos' => $productos, 'cantidad' => $cantidad);
=======
        $repository = $this->getDoctrine()
                ->getRepository('AppBundle:Producto');

        $cantidad = $repository->getStockCritico();

        $repository2 = $this->getDoctrine()
                ->getRepository('AppBundle:Pedido');
        

        $pedidosAbiertos = $repository2->getPedidosAbiertos();
>>>>>>> 8c12524ad1058477afbe7269bf96f860da4b58f9
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'), 'stockCritico' => $cantidad, 'pedidosAbiertos' => $pedidosAbiertos,
        ]);
    }

}
