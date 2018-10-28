<?php
	include 'includes/session.php';

	if(isset($_POST['culle'])){
		$curr_password = $_POST['curr_password'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		if(password_verify($curr_password, $user['password'])){
			

			if($password == $user['password']){
				$password = $user['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			$sql = "UPDATE stock SET username = '$username', password = '$password', firstname = '$firstname', lastname = '$lastname' WHERE id = '".$user['id']."'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Admin profile updated successfully';
			}
				else{
					$_SESSION['error'] = $conn->error;
				}
				
			}
			
		}
?>