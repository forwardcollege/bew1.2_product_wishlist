<?php

class Products
{

    public $database;

    public function __construct()
    {
        // Only change code below this line 

            // instruction: create a new PDO connection to the database


        // Only change code above this line

    }
    
    public function getProducts()
    {
        $products = [];
        // Only change code below this line 

            // instruction: get all products from the database and return them as an array of associative arrays


        // Only change code above this line

        return $products;
    }

    public function addProductToWishlist($product_id)
    {
        // Only change code below this line 

            // instruction: add the product to the wishlist


        // Only change code above this line
    }
}