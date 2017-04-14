<?php
/**
 * Created by PhpStorm.
 * User: luca5
 * Date: 14/04/2017
 * Time: 14:37
 */

namespace BDEexianancy\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Response;


class RegistrationController
{
    public function indexAction()
    {
        return new Response("Notre propre Hello World !");
    }
}