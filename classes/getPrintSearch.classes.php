<?php

include 'dbh.classes.php'; // Make sure this path is correct



class GetPrintSearch extends Dbh {
    

    public function search() {
        $getPrint = $this->connect()->prepare('SELECT * FROM prints WHERE');
        $getPrint->execute(); // Execute the prepared statement
        $prints = $getPrint->fetchAll(PDO::FETCH_ASSOC);
        return $prints; // Return the fetched products
    }
}

$getPrints = new GetPrints();
$prints = $getPrints->fetchProducts();