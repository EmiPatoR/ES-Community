<?php
/**
 * User: emip
 * Date: 30/01/16
 * Time: 01:08
 */

namespace ESC\MainBundle\APIs\LoL;


class ESCLolapiConnector
{
    protected $cu;
    protected $constants;

    //Constructor
    public function __construct(){

    }

    public function test(){
        return ESCLolapiConsts::generateURL(ESCLolapiConsts::EUW,ESCLolapiConsts::URL_ALL_CHAMIPONS);
    }
}