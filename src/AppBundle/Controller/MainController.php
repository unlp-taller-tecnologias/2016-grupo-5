<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Producto;

class MainController extends Controller
{

    public function frontRender($view, array $params = array(), Response $response = null)
    {

        $criticalProduct = $this->getDoctrine()
          ->getRepository('AppBundle:Producto')
          ->getCriticalProduct();
          
        $cantCriticalProduct = $this->getDoctrine()
          ->getRepository('AppBundle:Producto')
          ->getCountStockCritico();

        $data = array('cant' => $cantCriticalProduct, 'productos' => $criticalProduct );
        $params['productosCriticos'] = $data;
        return $this->render($view, $params, $response);
    }
}
