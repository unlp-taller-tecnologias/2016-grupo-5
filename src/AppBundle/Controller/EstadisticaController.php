<?php

namespace AppBundle\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Proveedor controller.
 *
 * @Route("estadistica")
 */
class EstadisticaController extends MainController {

    /**
     * @Route("/", name="estadistica_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $productos = $em->getRepository('AppBundle:Producto')->findAllActive();
        return $this->frontRender('estadistica/estadistica.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'), 'productos' => $productos, 'pedidos' => null,
        ]);
    }

    /**
     * @Route("/mostrar", name="mostrar")
     * @Method({"POST"})
     */
    public function mostrarAction() {
        $em = $this->getDoctrine()->getManager();

        $productos = $em->getRepository('AppBundle:Producto')->findAll();
        $pedidos = $em->getRepository('AppBundle:DetallePedido')->cantidadPorDia($_POST['producto_id'], '1990-04-12 00:00:00', '2016-12-1 00:00:00');
        //$pedidos = $em->getRepository('AppBundle:DetalleEnvio')->cantidadPorDia();

        return $this->frontRender('estadistica/estadistica.html.twig', array(
                    'chart' => $ob,
                    'productos' => $productos,
                    'pedidos' => $pedidos
        ));
    }

    /**
     * @Route("/estadisticasproducto", name="estadisticasproducto")
     * @Method({"GET"})
     */
    public function estadisticasProducto(Request $request) {


        $fecha_inicio = $request->get('fecha_inicio');
        $fecha_fin = $request->get('fecha_fin');
        if ($this->fecha_mayor($fecha_inicio, $fecha_fin)) {
            $producto_id = $request->get('producto_id');

            $em = $this->getDoctrine()->getManager();

            if ($producto_id !== '-1') {
                $array = explode("-", $fecha_fin);
                $array[2] = ++$array[2];
                $fecha_fin = implode("-", $array);
                $pedidos = $em->getRepository('AppBundle:DetallePedido')->cantidadPorDia($producto_id, $fecha_inicio, $fecha_fin);

                $envios = $em->getRepository('AppBundle:DetalleEnvio')->cantidadPorDia($producto_id, $fecha_inicio, $fecha_fin);
                $array = explode("-", $fecha_fin);
                $array[2] = --$array[2];
                $fecha_fin = implode("-", $array);


                $fechas = $this->arreglo_fechas($fecha_inicio, $fecha_fin, $pedidos, $envios);
            } else {
                $array = explode("-", $fecha_fin);
                $array[2] = ++$array[2];
                $fecha_fin = implode("-", $array);
                $pedidos = $em->getRepository('AppBundle:DetallePedido')->cantidadPorDiaTotal($fecha_inicio, $fecha_fin);
                $envios = $em->getRepository('AppBundle:DetalleEnvio')->cantidadPorDiaTotal($fecha_inicio, $fecha_fin);
                $productos = $em->getRepository('AppBundle:Producto')->findAllActiveArray();
                $fechas = $this->merge_prod($productos, $pedidos, $envios);
            }
            return new JsonResponse($fechas);
        } else {
            $msg = 'La fecha inicial es posterior a la fecha final';
            $response = new Response();
            $response->setContent($msg);
            $response->setStatusCode(Response::HTTP_BAD_REQUEST);
            return $response;
        }
    }

    public function merge_prod($productos, $pedidos, $envios) {
 
        $dataE = array();
        foreach ($envios as $prod) {
            $dataE[(int) $prod[1]] =(int) $prod['cantidad'];
        }
        $dataP = array();
        foreach ($pedidos as $prod) {
            $dataP[(int) $prod[1]] = (int) $prod['cantidad'];
        }
        foreach($productos as &$prod){
            if (isset($dataE[$prod['id']])){
            $prod['cantE']= $dataE[$prod['id']];
            }else{
                $prod['cantE']=0;
            }
            if (isset($dataP[$prod['id']])){
            $prod['cantP']= $dataP[$prod['id']];
            }else{
                $prod['cantP']=0;
            }
        }
       $res = $productos;
       return $res;
   }
    

    public function fecha_mayor($fecha_inicio, $fecha_fin) {
        $fecha1 = \DateTime::createFromFormat("Y-m-d", $fecha_inicio);
        $fecha2 = \DateTime::createFromFormat("Y-m-d", $fecha_fin);
        return ($fecha1 <= $fecha2);
    }

    public function arreglo_fechas($fecha_inicio, $fecha_fin, $pedidos, $envios) {
        $desde = \DateTime::createFromFormat("Y-m-d", $fecha_inicio);
        $hasta = \DateTime::createFromFormat("Y-m-d", $fecha_fin);
        $interval = $hasta->diff($desde);
        $days = $interval->days;
        $array_dias = array();
        $array_pedidos = array();
        $array_envios = array();

        for ($i = 0; $i <= ($days); $i++) {
            $data = $desde->format("d/m/Y");
            array_push($array_dias, $data);
            $array_envios[$data] = 0;
            $array_pedidos[$data] = 0;
            $desde->add(new \DateInterval("P1D"));
        }
        foreach ($pedidos as $pedido) {
            $array_pedidos[$pedido["fechaCierre"]->format('d/m/Y')] = $pedido["cantidad"];
        }
        foreach ($envios as $envio) {
            $array_envios[$envio["fecha"]->format('d/m/Y')] = $envio["cantidad"];
        }
        return ['fechas' => $array_dias, 'envios' => array_values($array_envios), 'pedidos' => array_values($array_pedidos)];
    }

}
