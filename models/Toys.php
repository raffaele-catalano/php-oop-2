<?php

require_once __DIR__ . '/Product.php';

class Toys extends Product {

    private $material;
    private $dimensions;
    
    //SETTER
    public function setMaterial($_material){
        $this->material = $_material;
    }
    public function setDimensions($_dimensions){
        $this->dimensions = $_dimensions;
    }
    
    //GETTER
    public function getMaterial(){
        return $this->material;
    }
    public function getDimensions(){
        return $this->dimensions;
    }
}