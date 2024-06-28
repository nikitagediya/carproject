<?php 
require_once('connection.php');

if(isset($_POST['btnSubmit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$query="insert into contact(name,email,message) values('$name','$email','$message');";
	$result = mysqli_query($con,$query);
	
	if($result)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Message sent successfully!");'; 
		echo 'window.location.href = "contactus2.html";';
		echo '</script>';
    }
}


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->Username   = 'nikitagediya18@gmail.com';                     //SMTP username
    $mail->Password   = 'yaylotdqshwvsner';                               //SMTP password

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'ND CAR LEASE');
    $mail->addAddress($email, $name);     //Add a recipient

    $message = "Thank you for taking the time to send us your valuable feedback. We're glad you enjoyed our services, and we appreciate your response.
    We're extremely grateful for your feedback. <br> Thank you ".$name." for taking the time to write to us!";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Visiting Mail';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>