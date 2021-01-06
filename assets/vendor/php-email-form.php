<?php
       $receiving_email_address;
      $_POST['name'];
      $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['Message'];
      $receiving_email_address"thanosmadenis@hotmail.com"
      $email-subject="mpla mpla"
      $email_body="User name":$name.\n.
                    "User email":$name.\n.
                    "User Message":$name.\n;

    $to="thanosmadenis@hotmail.com"
    $headers="From:$receiving_email_address\r\n";
    $headers="From:$Reply-To:$visitor_email\r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("location: index.html");