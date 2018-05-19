<?php

namespace SNT\ReservationBundle\Controller;

use SNT\ReservationBundle\Entity\Bien;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction(Request $request)
    {
        return $this->render('admin/index.html.twig', array(
        ));
    }

    /**
     * @Route("/accueil")
     */
    public function accueilAction(Request $request)
    {
        return $this->render('admin/accueil.html.twig', array(
        ));
    }

    /**
     * @Route("/reservation")
     */
    public function reservationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $reservations = $em->getRepository('RESERVATIONBundle:reservation')->findReservation(null, null, null);

        return $this->render('admin/reservation.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    /**
     * @Route("/detail")
     */
    public function detailAction(Request $request)
    {
        if ($request->isMethod('GET')) {
            extract($_GET);
            $em = $this->getDoctrine()->getManager();
            $reservation = $em->getRepository('RESERVATIONBundle:reservation')->findReservation($idReservation, $idClient, $idBien);

            return $this->render('admin/detail.html.twig', array(
                'reservation' => $reservation,
            ));
        }
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('RESERVATIONBundle:reservation')->findReservation(2, 18, 2);

        return $this->render('admin/detail.html.twig', array(
            'reservation' => $reservation,
        ));
    }

    /**
     * @Route("/contrat")
     */
    public function contratAction(Request $request)
    {
        extract($_GET);
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('RESERVATIONBundle:reservation')->findReservation($idReservation, $idClient, $idBien);

        return $this->render('admin/contrat.html.twig', array(
            'reservation' => $reservation,
        ));
    }

    /**
     * @Route("/requete_ajax")
     */
    public function requete_ajaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            extract($_POST);
            if (isset($requete)) {
                switch ($requete) {
                    case 'lister_les_reservations_en_cours':
                        $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBien(null, null, null, null);

                        return new Response(json_encode($biens));
                    break;

                    case 'rechercher_un_reservation_en_cours':
                        $reservation = $em->getRepository('RESERVATIONBundle:reservation')->findReservation($idReservation, $idClient, $idBien);

                        return new Response(json_encode($reservation));
                    break;

                    case 'charger_la_page_detail':
                        $reservation = $em->getRepository('RESERVATIONBundle:reservation')->findReservation($idReservation, $idClient, $idBien);

                        return new Response(json_encode($reservation));
                    break;

                    default:
                        // code...
                    break;
                }
            }
        }
    }
}
