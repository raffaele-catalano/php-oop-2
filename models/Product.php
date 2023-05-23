<?php

class Product {
    public $name;
    public $price;
    public $image;
    public $category;
    public $brand;
    public $description;

    public function __construct($_name)
    {
        $this->name = $_name;
    }
    //SETTER
    public function setPrice($_price){
        $this->price = $_price;
    }
    public function setImage($_image){
        $this->image = $_image;
    }
    public function setCategory($_category){
        $this->category = $_category;
    }
    public function setBrand($_brand){
        $this->brand = $_brand;
    }
    public function setDescription($_description){
        $this->description = $_description;
    }
    //GETTER
    public function getPrice(){
        return $this->price;
    }
    public function getImage(){
        return $this->image;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getDescription(){
        return $this->description;
    }
}