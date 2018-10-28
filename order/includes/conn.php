<?php
	$conn = new mysqli('localhost', 'root', '8520', 'pfarm');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>