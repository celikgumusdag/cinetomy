<?php

namespace HeaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/header")
     */

    public function indexAction()
    {
        $name = 'Hello Papi';

        return $this->render('HeaderBundle:Default:index.html.twig', ['name' => $name]);
    }
}
