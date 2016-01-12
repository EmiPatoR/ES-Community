<?php

namespace ESC\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ESCMainBundle:Default:index.html.twig');
    }
}
