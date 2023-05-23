<?php

require_once __DIR__ . '/Product.php';

class Sanitary extends Product {

    private $action;
    private $duration = null;

    //SETTER
    public function setAction($_action){
        $this->action = $_action;
    }
    public function setDuration($_duration){
        $this->duration = $_duration;
    }
    
    //GETTER
    public function getAction(){
        return $this->action;
    }
    public function getDuration(){
        return $this->duration;
    }
}