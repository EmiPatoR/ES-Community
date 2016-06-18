<?php
/**
 * User: emip
 * Date: 30/01/16
 * Time: 01:08
 */

namespace ESC\MainBundle\APIs\LoL;
use ESC\MainBundle\Entity\LOLChampion;
use Doctrine\ORM\EntityManager;
use ESC\MainBundle\Entity\LOLSummoner;

class ESCLolapiConnector
{
    protected $curlRessource;
    protected $constants;
    protected $champions;
    protected $em;


    //Constructor
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    protected function initRessource($url){

        //Curl initiation
        $this->curlRessource = curl_init();

        // Disable SSL
        curl_setopt($this->curlRessource,CURLOPT_SSL_VERIFYPEER, false);

        //Return the response instead of printing it
        curl_setopt($this->curlRessource,CURLOPT_RETURNTRANSFER,true);

        //set the url
        curl_setopt($this->curlRessource,CURLOPT_URL, $url);

    }

    protected function getSummonerFromJSON($json,$name){
        $summoner = new LOLSummoner();
        $summoner->setSummonerID($json->{$name}->{"id"});
        $summoner->setName($json->{$name}->{"name"});
        $summoner->setProfileIconId($json->{$name}->{"profileIconId"});
        $summoner->setRevisionDate($json->{$name}->{"revisionDate"});
        $summoner->setSummonerLevel($json->{$name}->{"summonerLevel"});
        return $summoner;
    }

    protected function getChampionFromJSON($json){
        $champion = new LOLChampion();
        $champion->setChampionId($json->{"id"});
        $champion->setActive($json->{"active"});
        $champion->setBotEnabled($json->{"botEnabled"});
        $champion->setBotMmEnabled($json->{"botMmEnabled"});
        $champion->setFreeToPlay($json->{"freeToPlay"});
        $champion->setRankedPlayEnabled($json->{"rankedPlayEnabled"});
        return $champion;
    }

    /**
     * Save ALL champions in DB
     * @param $json
     */
    protected function saveAllChampions($json){
        $championsList = $json->{"champions"};
        $size = count($championsList);
        for ($i=0;$i<$size;++$i){
            $currentChamp = $this->getChampionFromJSON($championsList[$i]);
            $this->em->persist($currentChamp);
        }
        $this->em->flush();
    }

    /**
     * Save the specified champion in DB
     *
     * @param $champion
     */
    public function saveChampion($champion){
        $this->em->persist($champion);
        $this->em->flush();
    }

    /**
     * Save the specified summoner in DB
     *
     * @param $summoner
     */
    public function saveSummoner($summoner){
        $this->em->persist($summoner);
        $this->em->flush();
    }

    /**
     *
     * Get a champion from LoL API or From DB according to $db value.
     *
     * @param $id
     * @param $db
     * @return LOLChampion
     */
    public function getChampion($id,$db=true){
        $champion = null;
        if(!$db) {
            $params = ESCLolapiConsts::generateParams(ESCLolapiConsts::PARAM_CHAMPION_ID, $id);
            $url = ESCLolapiConsts::generateURL(ESCLolapiConsts::EUW, ESCLolapiConsts::URL_CHAMPION_BY_ID, $params);
            $this->initRessource($url);
            $result = curl_exec($this->curlRessource);
            curl_close($this->curlRessource);
            $json = json_decode($result);
            $champion = $this->getChampionFromJSON($json);
        }
        else{
            $repo = $this->em->getRepository("ESCMainBundle:LOLChampion");
            $champion = $repo->findOneBy(
                array('championId',$id)
            );
        }
        return $champion;
    }

    /**
     *
     * Get a summoner from LoL API or From DB according to $db value.
     *
     * @param $name
     * @param $db
     * @return LOLChampion
     */
    public function getSummoner($name,$db=true){
        $sum = null;
        //Removes spaces from name ans put to lowercase
        $treatedName = strtolower($name);
        $treatedName = str_replace(" ","",$treatedName);
        if(!$db){
            $params = ESCLolapiConsts::generateParams(ESCLolapiConsts::PARAM_SUMMONER_NAMES, $treatedName);
            $url = ESCLolapiConsts::generateURL(ESCLolapiConsts::EUW, ESCLolapiConsts::URL_SUMMONER_BY_SUMMONER_NAMES, $params);
            $this->initRessource($url);
            $result = curl_exec($this->curlRessource);
            curl_close($this->curlRessource);
            $json = json_decode($result);
            $sum = $this->getSummonerFromJSON($json,$treatedName);
        }
        else{
            $repo = $this->em->getRepository("ESCMainBundle:LOLSummoner");
            $sum = $repo->findOneBy(
                array('name',$name)
            );
        }
        return $sum;
    }

    /**
     * Save All champions in DB
     *
     */
    public function saveChampions(){
        $url = ESCLolapiConsts::generateURL(ESCLolapiConsts::EUW,ESCLolapiConsts::URL_ALL_CHAMIPONS,null);
        $this->initRessource($url);
        $result = curl_exec($this->curlRessource);
        curl_close($this->curlRessource);
        $json = json_decode($result);
        $this->saveAllChampions($json);
    }
}