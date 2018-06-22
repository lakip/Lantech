<?php
include "includes/conn.php";
$sql="UPDATE notification SET status=1 WHERE status=0";	
$result=mysqli_query($conn, $sql);

$sql="select * from notification";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-date'>". $row["date"] . "</div>" . 
	"<div class='notification-hno'>". $row["hno"] . "</div>" .
	"<div class='notification-bno'>". $row["bno"] . "</div>" .
	"<div class='notification-comment'>" . $row["comment"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>