<?php

include 'dbh.classes.php'; // Make sure this path is correct



class GetPrintSearch extends Dbh {
    

    public function search($search) {

        $getSearch = $this->connect()->prepare('SELECT * FROM prints WHERE print_Name LIKE :search');
        
  
        $searchTerm = '%' . $search . '%'; // Adding '%' for partial match
        $getSearch->bindParam(':search', $searchTerm, PDO::PARAM_STR);
        
        $getSearch->execute(); // Execute the prepared statement
        $prints = $getSearch->fetchAll(PDO::FETCH_ASSOC);
        
        return $prints; // Return the fetched prints
        }
}
