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
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'), 'productos' => $productos,
        ]);
    }
    
    /**
     * @Route("/datosProducto", name="datos_producto")
     * @Method({"POST"})
     */
     public function datosProductoAction(Request $request)
    {
        if($request->isXmlHttpRequest())
        {
            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer());
 
            $serializer = new Serializer($normalizers, $encoders);
 
            $em = $this->getDoctrine()->getManager();
            $posts =  $em->getRepository('AppBundle:Producto')->findAll();
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'response' => 'success',
                'producto' => $serializer->serialize($posts, 'json')
            ));
            return $response;
        }
    }

}
