<?php
	include '../includes/connection.php';

	if(!empty($_POST['brgy-name']) && !empty($_POST['brgy-chairman']) && !empty($_POST['brgy-hotline'])){
		$brgy_name = $_POST['brgy-name'];
		$brgy_address = $_POST['brgy-address'];
		$brgy_chairman = $_POST['brgy-chairman'];
		$brgy_hotline = $_POST['brgy-hotline'];
		$brgy_availability = $_POST['brgy-availability'];
		$brgy_id = $_POST['brgy-id'];

		if($brgy_availability == null){
			$brgy_availability = 0;
		}

			$sql = "UPDATE brgy SET brgy_name = ?, brgy_chairman = ?, brgy_hotline = ?, availability = ?, brgy_address = ? WHERE id = ?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sssssi",$brgy_name,$brgy_chairman,$brgy_hotline,$brgy_availability,$brgy_address,$brgy_id);
			$stmt->execute();
			if($stmt){
				$thismsg = array("msg" => '1');  
				$_SESSION['message'] = "record has been updated successfully";
			}
			else{
				$thismsg = array("msg" => '2');
			}
			$stmt->close();
	}
	echo json_encode($thismsg);
	$conn->close();
?>