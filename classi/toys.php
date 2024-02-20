<?php

include_once __DIR__ . '/product.php';
include_once __DIR__.'/../traits/HasMaterial.php' ;

  class Toys extends Product{
      use HasMaterial;

     public function __construct( 

            String $image,
            String $name,
            Float $price,
            Category $category,
            String $availability,
            String $material,)
     {
        $this->material = $material;
         parent ::__construct( $image, $name, $price, $category, $availability);
     }
  }