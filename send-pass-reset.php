<?php
require("./connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$reset_token)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    
try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'nikitagediya18@gmail.com';                     //SMTP username
    $mail->Password   = 'yaylotdqshwvsner';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'ND CAR LEASE');
    $mail->addAddress($email);     //Add a recipient

    $message = "We got a request from you to reset your password! <br> Click the link below : <br> <a href='http://localhost/carproject/updatepass.php?email=$email&reset_token=$reset_token'>Reset Password</a>";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset Link';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    return true;

} catch (Exception $e) {
    return false;
}

}
  if(isset($_POST['submit_email'])){
    $query="SELECT * FROM `users` WHERE `email` = '$_POST[email]'";
    $result=mysqli_query ($con, $query);
    if($result)
     {
      if(mysqli_num_rows($result)==1)
      {
        $reset_token=bin2hex(random_bytes(16));
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d");
        $query="UPDATE `users` SET `reset_token_hash`='$reset_token',`reset_token_expires_at`='$date' WHERE `email`='$_POST[email]'";
        if (mysqli_query($con,$query) && sendMail($_POST['email'],$reset_token)) {
            echo"
            <script>
              alert('Password reset link sent to mail');
              window.location.href='index.php';
            </script>
            ";
        } else {
            echo"
            <script>
              alert('Server Down! try again later');
              window.location.href='index.php';
            </script>
            ";
        }
        
      }
      else{
        echo"
        <script>
          alert('Email Not Found!!');
          window.location.href='index1.php';
        </script>
        ";
      }
     }
     else
     {
       echo"
        <script>
          alert('cannot run query');
          window.location.href='index1.php';
        </script>
        ";
     }
    }
