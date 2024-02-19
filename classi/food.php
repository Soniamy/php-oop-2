<?php
include_once __DIR__ . '/product.php';
 class Food extends Product{
    public $description;
    public $weight;
    public function __construct( 

            String $image,
            String $name,
            Float $price,
            Category $category,
            String $availability,
            String $description,
            String $weight)
    { 
            $this->description = $description;
            $this->weight = $weight;
            parent ::__construct( $image, $name, $price, $category,$availability);
    }
 }