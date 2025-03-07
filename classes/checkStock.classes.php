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