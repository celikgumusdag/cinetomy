<?php

namespace FooterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/footer")
     */
    public function indexAction()
    {
        return $this->render('FooterBundle:Default:index.html.twig');
    }
}
