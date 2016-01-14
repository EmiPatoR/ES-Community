<?php

namespace ESC\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $content = $this->get("templating")->render("ESCMainBundle:Default:index.html.twig",array(
            'listNews' => array()
        ));
        return new Response($content);
    }
}
