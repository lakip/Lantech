<?php
	include 'includes/conn.php';
			include 'includes/session.php';


	if(isset($_POST['Save'])){

		$dte=$_POST['dte'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];

		$idno = $_POST['idno'];
		$number_bought=$_POST['number_bought'];
		$mop=$_POST['mop'];
		$mpesa_code=$_POST['mpesa_code'];
		$amount=$_POST['amount'];

		$sql = "INSERT INTO purchases (dte, fname, lname, idno, number_bought,mop,mpesa_code,amount)
		                        VALUES ('$dte','$fname','$lname','$idno','$number_bought','$mop','$mpesa_code','$amount')";
		 if($conn->query($sql)){
		 	$_SESSION['success'] = 'Purchase captured successfully';
		

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

	
		 
	header('location: buyer.php');

?>