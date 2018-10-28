<?php
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$idno = $_POST['idno'];
		$date=$_POST['date'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$confirm_password=$_POST['confirm_password'];
		if ($_POST["password"] === $_POST["confirm_password"]) {
   // success!
}
else {
	

	echo "password doesnt march";
}
	
	$sql = "INSERT INTO buyer_registration (`fname`, `lname`, `idno`, `date`, `username`, `password`) VALUES ('$fname','$lname','$idno','$date','$username','$password')";
		if($conn->query($sql)){
			$_SESSION['success'] = ' Registration successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		echo "window.location='buyer/login_page.php'";
	}

	header('location: buyer/login_page.php');

?>
