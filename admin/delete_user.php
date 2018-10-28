<?php
	include 'includes/conn.php';

	if(isset($_POST['delete'])){
	
		
	
		$sql = "DELETE FROM user WHERE 1";
		if($conn->query($sql)){
			$_SESSION['success'] = 'user deleted successfully';
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