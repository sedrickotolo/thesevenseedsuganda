<?php

if(isset($_POST['submit']))
{
      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $mailFrom = $_POST['email'];
      $message = $_POST['message'];

      $mailTo = "sedricksedu2@gmail.com";
      $headers = "From:" $mailFrom;
      $txt = "You have received an email from ".$name.".\n\n".$message;
       

      mail($mailTo,$subject,$txt,$headers);

      header("Location: index.php?mailsend");


}


      $message = $_POST['message'];
      $name = $_POST['name'];
      $visitor_email = $_POST['email'];
      $subject = $_POST['subject'];

      $email_from = 'sedricksedu2@gmail.com';

      $emai_subject = 'New Form Submission';

      $email_body = "User Name:  $name.\n".
                        "User Email: $visitor_email\n".
                        "User Message: $message \n";

      $to = "sedricksedu2@gmail.com";

      $headers = "From: " . $from . "\r\n";
      $headers .= "Reply-To: ". $visitor_email . "\r\n";

      mail($to, $emai_subject, $message, $headers);
       
      ?>