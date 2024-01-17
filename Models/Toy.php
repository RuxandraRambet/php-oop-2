<?php
require_once __DIR__.'/Product.php';

class Toy extends Product {
    public $color;
    public $type = 'Toy';

    function __construct($_image, $_title, $_price, Category $_category, $_color) 
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->color = $_color;
    }
}