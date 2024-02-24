<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];


$from = ''
$to = 'preethishreeb21cs@psnacet.edu.in';
$body = "First Name: $fname.\n".
        "Last Name: $lname.\n".
        "Mail Id: $email.\n".
        "Message: $message.\n";

$header = "From :" .$from.
          "Reply-To:" .$email;

mail($to,$subject,$body,$header);
header("Location:contact.html")


?>