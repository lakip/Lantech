<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['user'])){
		$sql = "SELECT * FROM user WHERE id = '".$_SESSION['idno']."'";
		$query = $conn->query($sql);
		$student = $query->fetch_assoc();
	}

?>