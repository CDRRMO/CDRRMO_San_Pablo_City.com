<?php
	include '../includes/connection.php';
	include '../includes/timezone.php';

	if(!empty($_POST['brgy-name']) && !empty($_POST['brgy-chairman']) && !empty($_POST['brgy-username']) && !empty($_POST['brgy-password'])){
		$brgy_name = $_POST['brgy-name'];
		$brgy_chairman = $_POST['brgy-chairman'];
		$brgy_username = $_POST['brgy-username'];
		$brgy_password = $_POST['brgy-password'];

		$brgy_password = password_hash($brgy_password, PASSWORD_DEFAULT);

		$sqlExist = "SELECT brgy_username FROM brgy WHERE brgy_username = ? LIMIT 1";
		$stmt = $conn->prepare($sqlExist);
		$stmt->bind_param("s",$brgy_username);
		$stmt->execute();
		$stmt->store_result();

		if($stmt->num_rows >= 1) {
		 	$thismsg = array("msg" => '3');
		}
		else{
			$sql = "INSERT INTO brgy (brgy_name, brgy_chairman, brgy_username, brgy_password) VALUES (?,?,?,?)";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ssss",$brgy_name,$brgy_chairman,$brgy_username,$brgy_password);
			$stmt->execute();
			if($stmt){
				$thismsg = array("msg" => '1');  
				$_SESSION['message'] = "".$brgy_name." has been added";
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