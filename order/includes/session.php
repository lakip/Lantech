<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['buyer'])){
		header('location: buyer/index.php');
	}

	$sql = "SELECT * FROM buyer_registration WHERE id = '".$_SESSION['buyer']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>