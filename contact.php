<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$subject = "Pet Sitting - New Client( $name )...";

$msg = "
Name : $name\n
Email : $email\n
Phone : $phone\n
";

$msg = wordwrap($msg,70);

mail("reanna23renee@gmail.com",$subject,$msg);

/* change this to new url */
header('Location: https://durandev.net/reanna/response.html');

die();

?>