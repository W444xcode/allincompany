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
<?php
                    
if($message_sent):
?>

<h3>dasd</h3>
<?php
 else:
?>
<form class="form form-light contact-form" id="contact-form" method="POST">
  <!-- Hidden Required Fields -->
  <input type="hidden" name="project_name" value="All in company | landing page">
  <input type="hidden" name="admin_email" value="allincmpn05@gmail.com">
  <input type="hidden" name="form_subject" value="Contact Form Message">
  <!-- END Hidden Required Fields-->
  <div class="container-fluid px-4">
    <div class="row gx-5">
      <div class="col-12 col-md-6">
        <input class="block-rounded-s"  <?= $invalid_class_name ?? "" ?> type="text" name="Name" placeholder="Your Name*" required>
      </div>
      <div class="col-12 col-md-6">
        <input class="block-rounded-s" type="text" name="Company" placeholder="Company Name">
      </div>
      <div class="col-12 col-md-6">
        <input class="block-rounded-s" type="email" name="Email" placeholder="Email Adress*" required>
      </div>
      <div class="col-12 col-md-6">
        <input class="block-rounded-s" type="tel" name="Phone" placeholder="Phone Number*" required>
      </div>
      <div class="col-12">
        <textarea class="block-rounded-s margin-s" name="Message" placeholder="A Few Words*" required></textarea>
      </div>
      <div class="col-12">
        <span class="inputs-description">*Required fields</span>
        <button class=" btn btn-l btn-light hover-gradient hover-gradient-l"  name="submit" type="submit">
          <em></em>
          
          <span class="btn-caption">Submit</span>
        </button>  
      </div>
    </div>
  </div>
</form>
<?php
endif;
?>

