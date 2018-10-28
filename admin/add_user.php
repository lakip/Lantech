<?php
	include 'includes/conn.php';
	include 'includes/session.php';


	if(isset($_POST['add_user'])){
		$firstname = $_POST['firstname'];
		$lastname= $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$created_date = $_POST['created_date'];
		$lastname = $_POST['lastname'];
		// if ($password != $confirm_password) {

		// 	echo "password doesnt match";
		// }
		// else
		
	
		$sql = "INSERT INTO user (username,password,firstname,lastname,photo,created_on) VALUES ('$username','$password','$firstname','$lastname', '$photo', '$created_date')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'user added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		echo "window.location='user_management.php'";
	}

	
		 
	header('location: user_management.php');
			
		}
?>
