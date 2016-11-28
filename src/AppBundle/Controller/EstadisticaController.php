<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

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
     * @Method({"GET"})
     */
    public function datosProductoAction(Request $request) {

        if (true || $request->isXmlHttpRequest()) {
            $encoder = new JsonEncoder();
            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getNombre();
            });
            $serializer = new Serializer(array($normalizer), array($encoder));

            $em = $this->getDoctrine()->getManager();
            $posts = $em->getRepository('AppBundle:Producto')->findAll();
            
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'response' => 'success',
                'producto' => $serializer->serialize($posts, 'json')
            ));
            return $response;
        } else {
            
        }
    }

}
