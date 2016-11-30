<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


/**
 * Proveedor controller.
 *
 * @Route("estadistica")
 */
class EstadisticaController extends Controller {

    /**
     * @Route("/", name="estadistica_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $productos = $em->getRepository('AppBundle:Producto')->findAll();
        return $this->render('estadistica/estadistica.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'), 'productos' => $productos,'pedidos'=> null,
        ]);
    }

    /**
     * @Route("/mostrar", name="mostrar")
     * @Method({"POST"})
     */
    public function mostrarAction(){
        $em = $this->getDoctrine()->getManager();

        $productos = $em->getRepository('AppBundle:Producto')->findAll();
        $pedidos = $em->getRepository('AppBundle:DetallePedido')->cantidadPorDia($_POST['producto_id'], '1990-04-12 00:00:00', '2016-12-1 00:00:00');
        //$pedidos = $em->getRepository('AppBundle:DetalleEnvio')->cantidadPorDia();
        return $this->render('estadistica/estadistica.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'), 'productos' => $productos, 'pedidos'=>$pedidos,
        ]);
        
    }
    

}
