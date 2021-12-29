<?php
ini_set('display_errors', 1);
error_reporting( E_ALL );
$de = "mail@mail.com";
$pour = "foryou@mail.com";
$subject = "WAWAWAWAW";
$message = "Si ce mail a ete recu, C'est HTTP 200";
$headers = "From :". $de;
if(mail($to, $subject, $message, $headers)){
    echo " SUCCESS, Message Sent";
}else{
    echo " ERROR. Message Not Sent";
}
?>
