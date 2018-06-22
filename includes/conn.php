<?php
	$conn = new mysqli('localhost', 'root', '', 'pfarm');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>