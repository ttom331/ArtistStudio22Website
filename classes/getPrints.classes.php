<?php

include 'dbh.classes.php'; // Make sure this path is correct



class GetPrints extends Dbh {



    public function fetchPages(){
        $records = $this->connect()->prepare("SELECT COUNT(*) AS TOTAL FROM prints");
        $records->execute();
        $pages = $records->fetch(PDO::FETCH_ASSOC);
        $totalRecords = $pages['TOTAL'];
        $pages = ceil($totalRecords / 8);
        return $pages;
    }

    

    public function fetchProducts($category, $start = 0) {
        if(isset($_GET['page-nr'])){
            $page = (int)$_GET['page-nr'];
            $start = ($page -1) * 8; 
        }else {
            $start = 0;
        }
        
        $getProducts = $this->connect()->prepare('SELECT * FROM prints WHERE category = ? LIMIT ?, 8'); //the 8 is how many products displat per page and the second ? is the page number
        $getProducts->bindParam(1, $category, PDO::PARAM_STR);
        $getProducts->bindParam(2, $start, PDO::PARAM_INT);//makes sure it is an int 
        $getProducts->execute(); 
        $products = $getProducts->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    

}






