<?php

use PHPMailer\PHPMailer\PHPMailer;//for email verification
use PHPMailer\PHPMailer\Exception;


class Signup extends Dbh{

    protected function setUser($username, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users (username, pass, email_address) VALUES (?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $hashedPwd, $email))){
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed1");
            exit();

        }

        $this->sendVerificationEmail($email);

        $stmt = null;

    }


    protected function checkUser($username, $email) {
        $stmt = $this->connect()->prepare('SELECT username FROM users where username = ? OR email_address = ?;');

        if(!$stmt->execute(array($username, $email))){
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed2");
            exit();

        }

        $resultCheck = false;
        if($stmt->rowCount() >0) {
            $resultCheck = false;

        }
        else{
            $resultCheck = true;
        }

        return $resultCheck;

    }

    protected function specialChars($pwd) {
        return preg_match('/[^a-zA-Z0-9]/', $pwd) > 0;//checks if not a letter or a number
    }



    //email verification
    protected function sendVerificationEmail($email) {
        require __DIR__ . '/../vendor/autoload.php';  // Adjust path to go back to the root directory

        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io'; // Mailtrap SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'b8ddb82433698e'; // Replace with your Mailtrap username
            $mail->Password = '50e5c6ad426fa7'; // Replace with your Mailtrap password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 2525;

            //Recipients
            $mail->setFrom('thomaswellwood3@gmail.com', 'Your Website');
            $mail->addAddress($email);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Please verify your email address';
            $mail->Body    = 'Click on the following link to verify your email address: <a href="http://localhost:3000/verify.php?email=' . urlencode($email) . '">Verify Email</a>';

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}


