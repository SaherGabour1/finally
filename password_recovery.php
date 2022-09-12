<?php
session_start(); 

include 'connection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';


$user_email_address = $_POST['email'];



$mail = new PHPMailer(true);
$sql = "SELECT email FROM users WHERE email = '$user_email_address' ";
$result = sqlsrv_query( $conn , $sql, array(), array("Scrollable" => 'static'));

if( $result === false ) {
    die( print_r( sqlsrv_errors(), true));
}

if( sqlsrv_fetch( $result ) === false) {
    die( print_r( sqlsrv_errors(), true));
}

// If there is email address found
if(sqlsrv_num_rows($result) == 1){
try {
    //Server settings
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;          
    $mail->isSMTP();                                        
    $mail->Host       = 'smtp.gmail.com';                   
    $mail->SMTPAuth   = true;                                
    $mail->Username   = 'platletedonate@gmail.com';                    
    $mail->Password   = 'zmsbobutvcdztvni';                     
    $mail->SMTPSecure = 'tls';        
    $mail->Port = 587;                               


    $mail->setFrom('platletedonate@gmail.com', 'platletedonate');
    $mail->addAddress($user_email_address);   

 
 


    $mail->isHTML(true);                               
    $mail->Subject = 'nb-s.g platlete donate Password Recovery';

    $mail->Body    =        

                          'Hello! <br>
                                Someone has requested a link to change your password.
                                You can do this through the link below.<br>

                                <a href=http://localhost/project2/resetpasswords2.html> Change my password </a>.
                
                                If you didn\'t request this, please ignore this email.<br>

                                Your password won\'t change until you access the link above and create a new one.';



    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


    
 

    $mail->send();
    echo "<script> window.open('sucsesssendemail.html', '_self');</script>";
    }
    
    catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    

    }
else{

        
        header("location:failedsendemail.html");

       
 }

   

?>