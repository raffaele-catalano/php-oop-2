<?php

class Product {
    public $food;
    public $accessories;
    public $sanitary;

    public function __construct($_food, $_accessories, $_sanitary)
    {
        $this->food         = $_food;
        $this->accessories  = $_accessories;
        $this->sanitary     = $_sanitary;
    }
}