<?php
	include '../includes/connection.php';
	include '../includes/timezone.php';

	if(!empty($_POST['admin-name']) && !empty($_POST['admin-username']) && !empty($_POST['admin-password']) && !empty($_SESSION['admin_name'])){
		$admin_name = $_POST['admin-name'];
		$admin_username = $_POST['admin-username'];
		$admin_password = $_POST['admin-password'];
		$created_by = $_SESSION['admin_name'];

		$admin_password = password_hash($admin_password, PASSWORD_DEFAULT);

		$sqlExist = "SELECT username FROM admin WHERE username = ? LIMIT 1";
		$stmt = $conn->prepare($sqlExist);
		$stmt->bind_param("s",$admin_username);
		$stmt->execute();
		$stmt->store_result();

		if($stmt->num_rows >= 1) {
		 	$thismsg = array("msg" => '3');
		}
		else{
			$sql = "INSERT INTO admin (name, username, password, date_created, created_by) VALUES (?,?,?,?,?)";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sssss",$admin_name,$admin_username,$admin_password,$date,$created_by);
			$stmt->execute();
			if($stmt){
				$thismsg = array("msg" => '1');  
				$_SESSION['message'] = "".$admin_name." has been added";
			}
			else{
				$thismsg = array("msg" => '2');
			}
			$stmt->close();
		}
	}
	echo json_encode($thismsg);
	$conn->close();
?>