<?php
	include 'includes/conn.php';

	if(isset($_POST['add'])){
		$bname=$_POST['bname'];
		$date=$_POST['date'];
		$idno = $_POST['idno'];
		$bought = $_POST['bought'];
		$MOP=$_POST['MOP'];
		$amount=$_POST['amount'];
		


		$sql = "INSERT INTO buyer (`date`, `name`, `idno`, `bought`, `mop`, `amount`) VALUES ('$date','$bname','$idno','$bought','$MOP','$amount')";
		if($conn->query($sql)){
			$_SESSION['success'] = ' daily collection recorded successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		echo "window.location='daily_collection.php'";
	}

	
		 
	header('location: buyer.php');

?>