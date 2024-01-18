<?php
require_once __DIR__.'/Product.php';
require_once __DIR__.'/../Traits/Availability.php';

class Kennel extends Product {
    use Availability;
    public $size;
    public $color;
    public $type = 'Kennel';

    function __construct($_image, $_title, $_price, Category $_category, $_size, $_color, $_availability) 
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->size = $_size;
        $this->color = $_color;
        $this->availability = $_availability;
    }
}