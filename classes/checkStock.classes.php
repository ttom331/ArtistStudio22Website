<?php


class checkStock extends Dbh{
    public function getPrintStock($print_ID){
        $conn = $this->connect();
        $stock = $conn->prepare('SELECT print_Stock FROM prints WHERE print_ID = ?');
        $stock->execute(array($print_ID));
        $availableStock = $stock->fetch(PDO::FETCH_ASSOC);
        return $availableStock ? $availableStock['print_Stock'] : 0; //return the stock if true if not return 0.
        }
}

class checkStockCard extends Dbh{
    public function getPrintStock($print_ID){
        $conn = $this->connect();
        $stock = $conn->prepare('SELECT print_Stock FROM printcard WHERE print_ID = ?');
        $stock->execute(array($print_ID));
        $availableStock = $stock->fetch(PDO::FETCH_ASSOC);
        return $availableStock ? $availableStock['print_Stock'] : 0; //return the stock if true if not return 0.
        }
}

class DuplicateItem extends Dbh{
    public function checkDuplicate($print_Name, $userID){
        $conn = $this->connect();
        $duplicate = $conn->prepare('SELECT print_Name FROM basket WHERE print_Name = ? AND user_id = ?');
        $duplicate->execute(array($print_Name, $userID));
        $isDuplicate = $duplicate->fetch(PDO::FETCH_ASSOC);
        return $isDuplicate ? 1 : 0; //if returns a value is true returns 1, if no name exists in basket return 0.
    }
}