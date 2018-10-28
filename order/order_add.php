<?php
	include 'includes/conn.php';

	if(isset($_POST['add'])){
		$dte=$_POST['dte'];

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$idno=$_POST['idno'];
		$phone=$_POST['phone'];
		$orderr=$_POST['orderr'];
		$orderNumber=$_POST['orderNumber'];


	$sql = "INSERT INTO customer_order(date,fname,lname,idno,phone,orderr,orderNumber)
	           VALUES ('$dte','$fname', '$lname','$idno','$phone','$orderr','$orderNumber' set status='order pending')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'order placed successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		echo "window.location='order_form.php'";
	}

	
		 
	header('location: order_form.php');

?>