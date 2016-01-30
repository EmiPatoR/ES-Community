<?php
/**
 * User: emip
 * Date: 28/01/16
 * Time: 20:06
 */

    namespace ESC\MainBundle\APIs\LoL;

    use ESC\MainBundle\APIs\LoL\ESCLolapiConsts;

    class ESCLolapi
    {

        //TODO
        private $constants;

        //Constructor
        public function __construct(ESCLolapiConsts $consts){
            $this->constants = $consts;
        }

        public function test(){

        }
    }