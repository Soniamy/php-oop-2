<?php

include_once __DIR__ . '/product.php';

  class Toys extends Product{
     public $characteristics;
     public $dimensions;

     public function __construct( 

            String $image,
            String $name,
            Float $price,
            Category $category,
            String $availability,
            String $characteristics,)
     {
        $this->characteristics = $characteristics;
         parent ::__construct( $image, $name, $price, $category, $availability);
     }
  }