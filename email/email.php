<?php
$vinoo_email = "vinush9699info@gmail.com";
$sub = "hiiiii";
$msg = "Testing";
$rec = "vinush9699info@gmail.com";

$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
$headers .= 'From: '.$vinoo_email.''."\n";

mail($rec,$sub,$msg,$headers);
?>