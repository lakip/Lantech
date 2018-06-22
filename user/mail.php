<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notification</title>
</head>
<?php

$to = "aronlakip@gmail.com";
$subject = "VACCINATION DAY";
$txt = "VACCINATION";
$headers = "From: aronlakip@gmail.com" . "\r\n" .
"CC: lakip.aron@yahoo.com";

mail($to,$subject,$txt,$headers);
?>
<body>
</body>
</html>
