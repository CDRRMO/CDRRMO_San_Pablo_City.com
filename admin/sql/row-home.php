<?php 
	include '../includes/connection.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT id, mission, vision, about FROM home WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->bind_result($id, $mission, $vision, $about);
		$stmt->fetch();
		$row = array();
		$row = ['id' => $id, 'mission' => $mission, 'vision' => $vision, 'about' => $about];

		echo json_encode($row);
		$stmt->close();
	}
	$conn->close();
?>
