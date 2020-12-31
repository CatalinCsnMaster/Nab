<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$formcontent=" Nume: $name \n Email: $email \n Telefon: $phone \n Mesaj: $message";
$recipient = "info@nabservices.at";
$subject = "Contact Form";
$mailheader = "De la: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
 if (
    mail($to, $subject, $message, $headers)
) 
      echo"<script>alert('Nachricht erfolgreich gesendet')</script>";
   else
      echo "<script>
             alert('Nachricht erfolgreich gesendet'); 
             window.history.go(-1);
     </script>";
?>