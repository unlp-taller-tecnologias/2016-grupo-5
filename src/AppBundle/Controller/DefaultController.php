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

        $query = $repository->createQueryBuilder('p')
                ->where('p.stock < p.stockMinimo')
                ->orderBy('p.nombre', 'ASC')
                ->getQuery();
        $cantidad = 10;
        $repository2 = $this->getDoctrine()
                ->getRepository('AppBundle:Pedido');

        $query2 = $repository2->createQueryBuilder('p')
                ->where('p.fechaCierre = null')
                ->orderBy('p.id', 'ASC')
                ->getQuery();

        $productos = $query->getResult();
        $stockCritico = array('productos' => $productos, 'cantidad' => $cantidad,);
        $pedidosAbiertos = $query2;
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'), 'stockCritico' => $stockCritico, 'pedidosAbiertos' => $pedidosAbiertos,
        ]);
    }

}
