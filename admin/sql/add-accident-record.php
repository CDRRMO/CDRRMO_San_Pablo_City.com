<?php
	include '../includes/connection.php';
	include '../includes/timezone.php';

	if(!empty($_POST['accident-date']) && !empty($_POST['accident-location']) && !empty($_POST['accident-details']) && !empty($_SESSION['admin'])){
		$accident_date = $_POST['accident-date'];
		$accident_location = $_POST['accident-location'];
		$accident_details = $_POST['accident-details'];
		$added_by = $_SESSION['admin'];


			$sql = "INSERT INTO accident_record (accident_date, location, details, added_by) VALUES (?,?,?,?)";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sssi",$accident_date,$accident_location,$accident_details,$added_by);
			$stmt->execute();
			if($stmt){
				$thismsg = array("msg" => '1');  
				$_SESSION['message'] = "record has been added successfully";
			}
			else{
				$thismsg = array("msg" => '2');
			}
			$stmt->close();
	}
	echo json_encode($thismsg);
	$conn->close();
?>