<?php
require_once __DIR__.'/Product.php';

class Food extends Product {
    public $weight;
    public $type = 'Food';

    function __construct($_image, $_title, $_price, Category $_category, $_weight) 
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->weight = $_weight;
    }
}