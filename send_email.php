<?php
    //we need to get our variables first
    
 include('lib/config.php');  
    
    $name     =   $_POST['name'];  
    $from     =   $_POST['email'];
    $subject  =   $_POST['subject'];
    $message  =   $_POST['message'];

$headers = 'From: ' . $name . ' <' . $from . '>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$result = mail($contact, $subject, $message, $headers);
if($result)
	echo "sent";
else 
	echo "failed";
?>