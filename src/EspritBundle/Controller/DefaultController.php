<?php

namespace EspritBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritBundle:Membre:index.html.twig');
    }
    public function layoutAction()
    {
        return $this->render('EspritBundle:admin:layout.html.twig');
    }

    public function logoutAction()
    {

        return $this->redirectToRoute('login');

    }
    public function mapAction()
    {

        return $this->render('EspritBundle:Membre:map.html.twig');

    }
}
