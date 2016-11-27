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

}
