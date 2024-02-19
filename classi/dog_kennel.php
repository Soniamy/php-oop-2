<?php
include_once __DIR__ . '/product.php';
  class DogKennel extends Product{
    public $material;
    public $dimensions;

    public function __construct(

      String $image,
      String $name,
      Float $price,
      Category $category,
      String $availability,
      String $material,
      String $dimensions,)
    {
        $this->material = $material;
        $this->dimensions = $dimensions;
        parent ::__construct( $image, $name, $price, $category, $availability);
    }
  }