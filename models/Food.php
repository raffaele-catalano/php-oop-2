<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    
    private $taste;
    private $weight;

    //SETTER
    public function setTaste($_taste){
        $this->taste = $_taste;
    }
    public function setWeight($_weight){
        $this->weight = $_weight;
    }
    
    //GETTER
    public function getTaste(){
        return $this->taste;
    }
    public function getWeight(){
        return $this->weight;
    }
    
}