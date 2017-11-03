<?php

namespace TuniParking\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TuniParkingApiBundle:Default:index.html.twig');
    }
    public function ListParkingsAction()
    {
        $JsonResponse = [];
        $em = $this->getDoctrine()->getManager();
        $Parkings = $em->getRepository('BackOfficeBundle:Parking')->findBy(array('type' => 'Tv'));
        foreach ($Parkings as $Parking) {

            $JsonResponse[] = [
                'id' => $Parking->getId(),

            ];

        }


        return new JsonResponse($JsonResponse);
    }

}
