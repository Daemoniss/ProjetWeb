<?php

namespace BDEexianancy\ConnexionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BDEexianancyConnexionBundle:Default:index.html.twig');
    }
}
