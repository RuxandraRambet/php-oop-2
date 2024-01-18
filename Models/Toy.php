<?php
require_once __DIR__.'/Product.php';
require_once __DIR__.'/../Traits/Availability.php';

class Toy extends Product {
    use Availability;
    public $color;
    public $type = 'Toy';
   
    function __construct($_image, $_title, $_price, Category $_category, $_color,  $_availability) 
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->color = $_color;
        $this->availability = $_availability;
    }
}