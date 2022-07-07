<?php 
	include '../includes/connection.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT id, globe, smart, landline, red_cross, dotc, pnp, bfp, dpwh FROM emergency_hotline WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->bind_result($id, $globe, $smart, $landline, $red_cross, $dotc, $pnp, $bfp, $dpwh);
		$stmt->fetch();
		$row = array();
		$row = ['id' => $id, 'globe' => $globe, 'smart' => $smart, 'landline' => $landline, 'red_cross' => $red_cross, 'dotc' => $dotc, 'pnp' => $pnp, 'bfp' => $bfp, 'dpwh' => $dpwh];

		echo json_encode($row);
		$stmt->close();
	}
	$conn->close();
?>
