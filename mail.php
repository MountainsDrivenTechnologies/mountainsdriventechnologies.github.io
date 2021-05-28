<?php
$from =  $_POST['Email'];
$cc = "hardikmasalawala88@gmail.com";
$to = "mountainsdriventechnologies@gmail.com";
$name = $_POST['Name'];
$website = $_POST['Website'];
$subject = 'Inquiry from '. $_POST['Website'];
$phone = $_POST['Phone'];
$txtMessage = $_POST['Message'];
$message = "We have inquiry from <strong>$to</strong> for <strong>$website</strong> \nMessage we have received below message \n";
$message .= "\n\n<strong>Person Name:</strong> $name";
$message .= "\n\n<strong>Contact Number:</strong> $phone";
$message .= "\n\n<strong>Message:</strong> \n$txtMessage";

$headers = "From: $from " ; 
$headers .= "Cc: ". $cc . " \r \n ";
$ok = @mail($to, $subject, $message, $headers, "-f " . $from);   

?>