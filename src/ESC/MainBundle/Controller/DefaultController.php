<?php

namespace ESC\MainBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //Fix arbitrary value, TODO replace it with DB news
        $listNews = array(
            array(
                'id'        =>      123,
                'title'     =>      'News de LoL',
                'gameID'    =>      1,
                'author'    =>      'EmiP',
                'content'   =>      'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'date'      =>      new \DateTime()
            ),
            array(
                'id'        =>      168,
                'title'     =>      'News de Dota',
                'gameID'    =>      2,
                'author'    =>      'dark_moody',
                'content'   =>      'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'date'      =>      new \DateTime()
            ),
            array(
                'id'        =>      95,
                'title'     =>      'News de CS:GO',
                'gameID'    =>      3,
                'author'    =>      'EmiP',
                'content'   =>      'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur.',
                'date'      =>      new \DateTime()
            )
        );

        $
        $sum = $this->get("esc.game_api.lol.connector")->getSummoner("dark moody",false);
        try {
            $this->get("esc.game_api.lol.connector")->saveSummoner($sum);
        }
        catch(UniqueConstraintViolationException $e){
            echo "TEST";
            //TODO Summoner already in DB Error
        }

        $content = $this->get("templating")->render("ESCMainBundle:Default:index.html.twig",array(
            'listNews' => $listNews
        ));

        return new Response($content);
    }
}
