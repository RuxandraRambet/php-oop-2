<?php
require_once __DIR__.'/Product.php';

class Kennel extends Product {
    public $size;
    public $color;

    function __construct($_image, $_title, $_price, Category $_category, $_size, $_color) 
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->size = $_size;
        $this->color = $_color;
    }
}