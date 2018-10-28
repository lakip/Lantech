<?php
	include 'includes/conn.php';
		include 'includes/session.php';


	if(isset($_POST['add'])){
		$dte=$_POST['dte'];

		$hno = $_POST['hno'];
		$bno = $_POST['bno'];
		$eggs=$_POST['eggs'];
		$broken=$_POST['broken'];


		$sql = "INSERT INTO daily_collection (tarehe,hno,bno,noCollected,broken) VALUES ('$dte','$hno', '$bno','$eggs','$broken')";
		 if($conn->query($sql)){
		 	$_SESSION['success'] = ' daily collection recorded successfully';
		

		if($conn->query($sql)){
				$_SESSION['success'] = 'recorded successfully';
			}
				else{
					$_SESSION['error'] = $conn->error;
				}

		}
	}
	else{
		echo "window.location='daily_collection.php'";
	}

	
		 
	header('location: record_dailly.php');

?>

	