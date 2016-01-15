<?php

namespace ESC\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NewsController extends Controller
{
    public function viewAction($id)
    {
        return $this->render('ESCMainBundle:News:view.html.twig',
            array('id' => $id)
        );
    }

    public function addAction(Request $req){
        $sess = $req->getSession();

        //Flash messages
        $sess->getFlashBag()->add('Informations','Votre news à bien été ajoutée.');

        //retrieve messages
        /*
        foreach($session->getFlashBag()->get('Informations',array()) as $message){
            echo $message;
        }
        */
        return $this->redirectToRoute('esc_news_view', array('id' => 5));
    }
}
