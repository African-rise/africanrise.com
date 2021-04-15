<?php

 if (isset($_POST['submit'])){
   $firstName = $_POST['firstName'];
   $lastName = $_POST['lastName'];
   $phonenumbers = $_POST['phonenumbers'];
   $mailFrom = $_POST['email'];
   $message = $_POST['message'];

   $mailTo = "africanrisengo@yahoo.com";
   $headers = "From: ".$mailFrom;
   $txt = "You have received email from".$firstName. " ".$lastName."\n\n".$message;

   mail($mailTo, $subject, $txt, $headers);
   header("location: contactform.php?mailsend");
 }
