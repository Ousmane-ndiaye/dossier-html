<?php

namespace ADOB\SenofficeBundle\Controller;
use ADOB\SenofficeBundle\Entity\Commune;
use ADOB\SenofficeBundle\Entity\Typedebien;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class FrontController extends Controller
{
    /**
     * @Route("/acceuil")
     * @Method({"GET", "POST"})
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository('SenofficeBundle:Typedebien')->findAll();
        $communes = $em->getRepository('SenofficeBundle:Commune')->findAll();

        return $this->render('SenofficeBundle:Front:index.html.twig', array(
            'activeA' => 'active',
            'communes' => $communes,
            'types' => $types,
        ));
    }

    /**
     * @Route("/catalogue")
     * @Method({"GET", "POST"})
     */
    public function catalogueAction()
    {
        return $this->render('SenofficeBundle:Front:catalogue.html.twig', array(
            'activeC' => 'active'
        ));
    }

    /**
     * @Route("/select/commune")
     * @Method({"POST"})
     */
    public function selectCommuneAction(Request $request)
    {
        extract($_POST);
        $em = $this->getDoctrine()->getManager();
        
        $communes = $em->getRepository('SenofficeBundle:Commune')->findCommune($localite);

        return new Response(json_encode($communes));
    }
}
