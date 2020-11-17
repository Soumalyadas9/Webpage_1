<?php
$visitor_email= $_POST['email'];

$email_from='OneBanc_yoyo@gmail.com';
$email_subject="Your Exclusive License to Be an Early OneBanc'er";

$email_body="Greeting From OneBanc\n".
             "Welcome to be part of Onebanc !\n";
             


$to="soumalyadas_yoyo@gmail.com";
$header="From:$email_from";
$headers="Reply-To:$visitor_email";

mail($to,$email_subject,$headers);
header("Location:index.html");
?>