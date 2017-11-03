<?php

namespace TuniParking\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TuniParkingBackOfficeBundle:Default:index.html.twig');
    }
}
