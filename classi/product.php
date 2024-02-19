<?php
include_once __DIR__ . '/category.php';
class Product{
    public $image;
    public $name;
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

