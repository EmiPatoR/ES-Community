<?php

namespace ESC\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //Fix arbitrary value, TODO replace it with BD news
        $listNews = array(
            array(
                'title'     =>      'News de LoL',
                'gameID'    =>      1,
                'author'    =>      'EmiP',
                'content'   =>      'Une news de LoL blablabla...',
                'date'      =>      new \DateTime()
            ),
            array(
                'title'     =>      'News de Dota',
                'gameID'    =>      2,
                'author'    =>      'EmiP',
                'content'   =>      'Une news de dota blablabla...',
                'date'      =>      new \DateTime()
            )
        );

        $content = $this->get("templating")->render("ESCMainBundle:Default:index.html.twig",array(
            'listNews' => $listNews
        ));
        return new Response($content);
    }
}
