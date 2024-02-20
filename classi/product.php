<?php
include_once __DIR__ . '/category.php';

include_once __DIR__.'/../traits/HasName.php' ;
class Product{
    use HasName;

    public $image;
    public $price;
    public $category;
    public $availability;
    public function __construct( 

            String $image,
            String $name,
            Float $price,
            Category $category,
            String $availability,)
    {
            $this->image = $image;
            $this->name = $name;
            $this->price = $price;
            $this->category = $category;  
            $this->availability =$availability; 
    }
    }

