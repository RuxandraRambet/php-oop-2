<?php

require_once __DIR__.'/Category.php';

class Product {
    public $image;
    public $title;
    public $price;
    public $category;
    
    function __construct($_image, $_title, $_price, Category $_category)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function get_product_type(){
        return get_class($this);
    }
}
