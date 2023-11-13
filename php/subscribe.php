<?php
            if(isset($_POST['submit'])){
              $usserEmail = $_POST['email'];
              if(filter_var($usserEmail, FILTER_VALIDATE_EMAIL)){
                $subject = "Thanks for subscribing us - allincompany";
                $pesan = "Thanks for subscribing to our blog, You'll always receive latest updates from us. And
                we won't share";
                $sender = "From: allincmpn05@gmail.com";
                if(mail($usserEmail,$subject,$pesan,$sender)){
                  ?>
                  <div class="alert-success">Thanks for subscribe us</div>
                  
                  <?php
                  $usserEmail = "";
                }else{
            ?>
            <div class="alert-error">Failed while sending your email</div>
            <?php
                }
              }else{
                ?>
                 <div class="alert-error"><?php echo $usserEmail ?>is not a valid email</div>
                <?php
              }
              
            }
         ?>
        