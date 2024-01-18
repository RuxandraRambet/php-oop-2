<?php
require_once __DIR__.'/Product.php';
require_once __DIR__.'/../Traits/Availability.php';

class Food extends Product {
    use Availability;
    public $weight;
    public $type = 'Food';

    function __construct($_image, $_title, $_price, Category $_category, $_weight, $_availability) 
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->weight = $_weight;
        $this->availability = $_availability;
    }
}