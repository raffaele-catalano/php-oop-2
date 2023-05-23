<?php

require_once __DIR__ . '/Product.php';

class Toys extends Product {
    private $material;
    private $color;
    //SETTER
    public function setMaterial($_material){
        $this->material = $_material;
    }
    public function setColor($_color){
        $this->color = $_color;
    }
    
    //GETTER
    public function getMaterial(){
        return $this->material;
    }
    public function getColor(){
        return $this->color;
    }
}