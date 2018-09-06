<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

    /**
    * @Route("/",name="app_home_router")
    */
    public function indexAction()
    {
        return $this->render('HomeBundle:Default:index.html.twig');
    }

    /**
     * @Route("/contact",name="app_contact_router")
     */
    public function contactAction()
    {
        return $this->render('HomeBundle:Pages:contact.html.twig');
    }

}
