<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Envio;
use AppBundle\Entity\Producto;
use AppBundle\Entity\Sector;
use AppBundle\Entity\DetalleEnvio;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Envio controller.
 *
 * @Route("envio")
 */
class EnvioController extends Controller
{
    /**
     * Lists all envio entities.
     *
     * @Route("/", name="envio_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $envios = $em->getRepository('AppBundle:Envio')->findAll();

        return $this->render('envio/index.html.twig', array(
            'envios' => $envios,
        ));
    }

    /**
     * Creates a new envio entity.
     *
     * @Route("/new", name="envio_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $envio = new Envio();
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('AppBundle:Producto')->findAllActive();
        $sectores = $em->getRepository('AppBundle:Sector')->findAllActive();
        if ($request->isMethod('POST')) {
            $sector = $em->getRepository('AppBundle:Sector')->findOneById($request->request->get('sector'));
            $envio->setSector($sector);
            $envio->setResponsable($request->request->get('responsable'));
            $em->persist($envio);
            foreach ($request->request->get('producto') as $id => $cant) {
              $detalleEnvio = new DetalleEnvio();
              $detalleEnvio->setEnvio($envio);
              $detalleEnvio->setCantidad($cant);
              $producto = $em->getRepository('AppBundle:Producto')->findOneById($id);
              $detalleEnvio->setProducto($producto);
              if ($detalleEnvio->isValid()) {
                $em->persist($detalleEnvio);
                $producto->subStock($detalleEnvio->getCantidad());
                $em->persist($producto);
                $envio->adddetalle($detalleEnvio);
                $em->persist($envio);
              }else{
                return $this->render('envio/new.html.twig', array(
                    'envio' => $envio,
                    'productos' => $productos,
                    'sectores' => $sectores,
                    'error' => "hay productos donde la cantidad de elementos a enviar es superior al stock, revise el listado"
                ));
              }
            }
            $em->flush();
            return $this->redirectToRoute('envio_index');
        }
        return $this->render('envio/new.html.twig', array(
            'envio' => $envio,
            'productos' => $productos,
            'sectores' => $sectores
        ));
    }

    /**
     * print a envio entity.
     *
     * @Route("/print/{id}", name="envio_print")
     * @Method({"GET"})
     */
    public function printAction(Envio $envio)
    {
        $em = $this->getDoctrine()->getManager();
        $html = $this->renderView('envio/print.html.twig', array(
            'envio'  => $envio
        ));
        $sectorName= str_replace(" ", "",ucwords(strtolower($envio->getSector()->getNombre())));
        $name = "envio_".$sectorName."_".$envio->getFecha()->format('m-d-Y').".pdf";
        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename='.$name
            )
        );
    }


    /**
     * Finds and displays a envio entity.
     *
     * @Route("/{id}", name="envio_show")
     * @Method("GET")
     */
    public function showAction(Envio $envio)
    {
        return $this->render('envio/show.html.twig', array(
            'envio' => $envio,
        ));
    }

}
