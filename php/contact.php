<?php

$message_sent = false;
if (isset($_POST['Email']) && $_POST['email'] != '') {

  if (filter_var($_POST['Name'], FILTER_VALIDATE_EMAIL)) {
    $uss = $_POST['Name'];
    $company = $_POST['Company'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $message = $_POST['Message'];
    
    $to = "allincmpn05@gmail.com";
    $body = "";
    
    $body = "From".$uss. "\r\n";
    $body = "company".$company. "\r\n";
    $body = "email".$email. "\r\n";
    $body = "phone".$phone. "\r\n";
    
    // mail($to,$message,$body);

    $message_sent = true;
  }else {
    $invalid_class_name = "form-invalid";
  }
}


?>