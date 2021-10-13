
<?php

session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
  $Fname = $_POST['name'];
  $email = $_POST['email'];
  $subjects = $_POST['subject'];
  $messages = $_POST['message'];


  //Load Composer's autoloader
  //require 'PHPMailerAutoload.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  //$htmlversion="<p style='color:red;'>This is the HTML Version</p>";
  //$textversion="This is the text veriosn";

  try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'armanimages5@gmail.com';                     //SMTP username
      $mail->Password   = '27626arman@nasima';                               //SMTP password
      $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('armanimages5@gmail.com', 'Mailer');
      $mail->addAddress('armanimages5@gmail.com', 'Joe User');     //Add a recipient
      //$mail->addAddress('ellen@example.com');               //Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Subject:'.$subjects;
      $mail->Body    = 'Name:'.$Fname."\n".'Email: '.$email."\n".'Message: '.$messages ;
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
$Fname = $_POST['name'];
$email = $_POST['email'];
$subjects = $_POST['subject'];
$messages = $_POST['message'];


// Create connection
$conn = new mysqli('localhost', 'root', '', 'whatson_academy');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  $stmt = $conn->prepare("INSERT INTO registration (name,email,subject,message) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss",$Fname, $email, $subjects, $messages);
  $stmt->execute();
  $_SESSION['status']="Your Data Submitted Successfully";
  header("Location: http://localhost/academy/contact.php");
  $stmt->close();
  $conn->close();
}


?>