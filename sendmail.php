<?php
$to_email = "ranjeetkumar31026@gmail.com";
$subject = "Email Test via PHP using Localhost";
$body = "Hi Hell Good Morning ";
$headers = "From:rockbusiness2021@gmail.com";

if(mail($to_email, $subject, $body, $headers)) {
    echo "Email sent successfully to $to_email...";
}else{
    echo "Sorry, failed while sending mail!";
}
?>