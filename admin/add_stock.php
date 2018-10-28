<?php
	include 'includes/conn.php';

	if(isset($_POST['add'])){
		$dte=$_POST['dte'];

		$hno = $_POST['hno'];
		$bno = $_POST['bno'];
		$chicks=$_POST['chicks'];
		


		$sql = "INSERT INTO stock (date,hno,bno,no) VALUES ('$dte','$hno', '$bno','$chicks')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'daily collection recorded successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		echo "window.location='daily_collection.php'";
	}

	
		 
	header('location: stockng.php');

?>