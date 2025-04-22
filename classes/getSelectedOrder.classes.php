<?php


include_once "dbh.classes.php";
$orderid = $_SESSION['orderid'];



class GetSelectedOrder extends Dbh {


    

    public function fetchOrderItems($orderid) {
        $getItems = $this->connect()->prepare('SELECT * FROM order_items WHERE order_ID = ?');
        $getItems->execute(array($orderid));
        $orderItems = $getItems->fetchAll(PDO::FETCH_ASSOC);
        return $orderItems; // Return the fetched products




        
    }



    
}

$getItems = new GetSelectedOrder();
$orderItems = $getItems->fetchOrderItems($orderid);

