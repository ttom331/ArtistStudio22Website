<?php

include 'dbh.classes.php'; // Make sure this path is correct



class GetPrints extends Dbh {
    

    public function fetchProducts($category) {
        $getProducts = $this->connect()->prepare('SELECT * FROM prints WHERE category = ?');
        $getProducts->execute(array($category)); // Execute the prepared statement
        $products = $getProducts->fetchAll(PDO::FETCH_ASSOC);
        return $products; // Return the fetched products
    }
}






