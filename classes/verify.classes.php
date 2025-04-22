<?php

include_once 'classes/dbh.classes.php'; 

class VerifyEmail extends Dbh {
    public function verifyUser($email){
        $stmt = $this->connect()->prepare('UPDATE users SET verified = 1 WHERE email_address = ?');//if verified set the verieifed to 1(true)

        if($stmt->execute([$email])){
            $_SESSION['verification-message'] = 'Your email has been successfully verified';
        }
        else{
            $_SESSION['verification-message'] =  'Error verifying your email';
        }
 
    }
}

//check if email is passed in the url
if(isset($_GET['email'])){
    $email = $_GET['email'];

    $verify = new VerifyEmail();
    $verify->verifyUser($email);
}else{
    echo 'Invalid Validation Link';
    header('Location: index.php');
}



?>