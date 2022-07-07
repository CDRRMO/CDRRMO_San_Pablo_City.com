<?php
	include 'includes/connection.php';

	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT id,name,username,password FROM admin WHERE username = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt->store_result();

		if($stmt->num_rows < 1){
			$_SESSION['message'] = 'Admin account cannot be found!';
			header('location: index.php');
		}
		else{
			$stmt->bind_result($id, $name, $uname, $pword);
			$stmt->fetch();
			if(password_verify($password, $pword)){
				$_SESSION['admin'] = $id;
				$_SESSION['admin_name'] = $name;
				header('location: home.php');
			}
			else{
				$_SESSION['message'] = 'Incorrect Password!';
				header('location: index.php');
			}
			$stmt->close();
		}
	}
	else{
		$_SESSION['message'] = 'Username and Password must not be empty';
		header('location: index.php');
	}
	$conn->close();
?>