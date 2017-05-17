<?php

namespace BIJI\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /*Accion que llama al servicio para gestionar la seguridad*/
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('BIJIUserBundle:Security:login.html.twig', array('last_username' => $lastUsername, 'error' => $error));
    }

    public function loginCheckAction()
    {

    }
}