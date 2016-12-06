<?php

namespace AppBundle\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

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

        $productos = $em->getRepository('AppBundle:Producto')->findAllActive();
        return $this->render('estadistica/estadistica.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'), 'productos' => $productos,'pedidos'=> null,
        ]);
    }

     
    
    /**
     * @Route("/mostrar", name="mostrar")
     * @Method({"POST"})
     */
    public function mostrarAction()
    {
        $em = $this->getDoctrine()->getManager();
<<<<<<< HEAD
        $productos = $em->getRepository('AppBundle:Producto')->findAll();
        $pedidos = $em->getRepository('AppBundle:DetallePedido')->cantidadPorDia($_POST['producto_id'], '1990-04-12 00:00:00', '2016-12-1 00:00:00');
        //$pedidos = $em->getRepository('AppBundle:DetalleEnvio')->cantidadPorDia();

        return $this->render('estadistica/estadistica.html.twig', array(
            'chart' => $ob,
            'productos' => $productos, 
            'pedidos'=>$pedidos
        ));
    }

    /**
     * @Route("/estadisticasproducto", name="estadisticasproducto       ")
     * @Method({"GET"})
     */    
    public function estadisticasProducto(Request $request)
    {
        $fecha_inicio=$request->get('fecha_inicio');
        $fecha_fin=$request->get('fecha_fin');
        $producto_id=$request->get('producto_id');
        
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('AppBundle:Producto')->findAll();
        $pedidos = $em->getRepository('AppBundle:DetallePedido')->cantidadPorDia($producto_id, '1990-04-12 00:00:00', '2016-12-1 00:00:00');

        return new JsonResponse(array($pedidos));
    }
=======

        $productos = $em->getRepository('AppBundle:Producto')->findAllActive();
        $pedidos = $em->getRepository('AppBundle:DetallePedido')->cantidadPorDia($_POST['producto_id'], '1990-04-12 00:00:00', '2016-12-1 00:00:00');
        //$pedidos = $em->getRepository('AppBundle:DetalleEnvio')->cantidadPorDia();
        return $this->render('estadistica/estadistica.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'), 'productos' => $productos, 'pedidos'=>$pedidos,
        ]);

    }

>>>>>>> 5d5ff8d286bc184ef4b35cc3da819de99800f39f

}
