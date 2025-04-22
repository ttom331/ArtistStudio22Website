<?php



class BasketItemCount extends DbhForBasketCount{
    public function basketCount($userid){
        $basketCount = $this->connect()->prepare('SELECT COUNT(*) FROM basket WHERE user_id = ?');
        $basketCount->execute(array($userid));
        $countBasket = $basketCount->fetch(PDO::FETCH_ASSOC);
        return $countBasket['COUNT(*)'];
    }
}

class DbhForBasketCount {
    protected function connect(){ //any class that extends to this class can use it.
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=lisaart2', $username, $password);
            return $dbh;

        }
        catch (PDOException $e){
            print "Error!: ". $e->getMessage() . "<br/>";

        }
    }
}