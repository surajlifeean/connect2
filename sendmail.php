<?php



$to = "suraj@accenza.co";
$subject = "My subject";
$txt ="Hello world!";
$headers = "From: suraj@bansuriyaa.com" . "\r\n" .
"CC: pramit@accenza.co";

mail($to,$subject,$txt,$headers);
?>