<?php
/**
 * User: emip
 * Date: 30/01/16
 * Time: 01:08
 */

namespace ESC\MainBundle\APIs\LoL;
use ESC\MainBundle\Entity\LOLChampion;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class ESCLolapiConnector
{
    protected $curlRessource;
    protected $constants;
    protected $champions;


    //Constructor
    public function __construct()
    {

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

    public function getChampion($id){
        $params = ESCLolapiConsts::generateParams(ESCLolapiConsts::PARAM_CHAMPION_ID,$id);
        $url = ESCLolapiConsts::generateURL(ESCLolapiConsts::EUW,ESCLolapiConsts::URL_CHAMPION_BY_ID,$params);
        $this->initRessource($url);
        $result = curl_exec($this->curlRessource);
        curl_close($this->curlRessource);
        $json = json_decode($result);
        $champion = $this->getChampionFromJSON($json);
        return strval($champion->getActive());
    }

    public function getChampions(){
        return ESCLolapiConsts::generateURL(ESCLolapiConsts::EUW,ESCLolapiConsts::URL_ALL_CHAMIPONS);
    }
}