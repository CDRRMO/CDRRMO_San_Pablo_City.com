<?php 
	include '../includes/connection.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT id, brgy_name, brgy_chairman, brgy_hotline, availability, brgy_address FROM brgy WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->bind_result($id, $brgy_name, $brgy_chairman, $brgy_hotline, $availability, $brgy_address);
		$stmt->fetch();
		$row = array();
		$row = ['id' => $id, 'brgy_name' => $brgy_name, 'brgy_chairman' => $brgy_chairman, 'brgy_hotline' => $brgy_hotline, 'availability' => $availability, 'brgy_address' => $brgy_address];

		echo json_encode($row);
		$stmt->close();
	}
	$conn->close();
?>
