<?php
$name = $_POST['name'];
$customer_email= $_POST['email'];
$customer_phno= $_POST['number'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from = 'atchireddy2001@gmail.com';

$email_suject = 'New Customer';

$email_body = "User Name: $name.\n".
               "User Email: $customer_email.\n".
                "User PhNo: $customer_phno.\n".
                 "User Subject: $subject.\n".
                  "User Message: $message.\n";

$to = 'atchireddy2001@gmail.com';

$header = "From: $email_from \r\n";

$header .="Reply-To: $customer_email \r\n";

mail($to,$email_suject,$email_body,$header);

header("Location: submit.html");         
?>
