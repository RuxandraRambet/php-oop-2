<?php
class Category {
    public $productCategory;

    function __construct($productCategory)
    {
        $this->productCategory = $productCategory;
    }

    public function getProductCategory() {
        $result = $this->productCategory;
        return $result;
    }
}