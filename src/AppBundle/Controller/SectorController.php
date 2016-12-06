<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sector;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sector controller.
 *
 * @Route("sector")
 */
class SectorController extends Controller
{
    /**
     * Lists all sector entities.
     *
     * @Route("/", name="sector_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request, Sector $sector = null)
    {
        $em = $this->getDoctrine()->getManager();

        $sectors = $em->getRepository('AppBundle:Sector')->findAll();
        if (is_null($sector)) {
          $sector = new Sector;
        }
        $form = $this->createForm('AppBundle\Form\SectorType', $sector);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sector);
            $em->flush();

            return $this->redirectToRoute('sector_index');
        }
        return $this->render('sector/index.html.twig', array(
            'sectors' => $sectors,
            'sector' => $sector,
            'form' => $form->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing sector entity.
     *
     * @Route("/{id}/edit", name="sector_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sector $sector)
    {
        return $this->indexAction($request, $sector);
    }


    /**
     * Deletes a sector entity.
     *
     * @Route("/{id}", name="sector_toggleActive")
     * @Method("GET")
     */
    public function toggleActiveAction(Sector $sector)
    {
        $em = $this->getDoctrine()->getManager();
        $sector->setActive(!$sector->getActive());
        $em->persist($sector);
        $em->flush($sector);
        return $this->redirectToRoute('sector_index');
    }


    /**
     * Creates a form to delete a sector entity.
     *
     * @param Sector $sector The sector entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sector $sector)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sector_delete', array('id' => $sector->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
