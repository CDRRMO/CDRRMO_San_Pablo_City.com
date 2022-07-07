<?php
	include '../includes/connection.php';
	include '../includes/timezone.php';

	if(!empty($_POST['hotline-globe']) && !empty($_POST['hotline-smart']) && !empty($_POST['hotline-landline']) && !empty($_POST['hotline-red-cross']) && !empty($_POST['hotline-dotc']) && !empty($_POST['hotline-pnp']) && !empty($_POST['hotline-bfp']) && !empty($_POST['hotline-dpwh']) && !empty($_SESSION['admin'])){
		$globe = $_POST['hotline-globe'];
		$smart = $_POST['hotline-smart'];
		$landline = $_POST['hotline-landline'];
		$red_cross = $_POST['hotline-red-cross'];
		$dotc = $_POST['hotline-dotc'];
		$pnp = $_POST['hotline-pnp'];
		$bfp = $_POST['hotline-bfp'];
		$dpwh = $_POST['hotline-dpwh'];
		$edited_by = $_SESSION['admin'];

			$sql = "UPDATE emergency_hotline SET globe = ?, smart = ?, landline = ?, red_cross = ?, dotc = ?, pnp = ?, bfp = ?, dpwh = ?, edited_by = ? WHERE id = 1";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ssssssssi",$globe,$smart,$landline,$red_cross,$dotc,$pnp,$bfp,$dpwh,$edited_by);
			$stmt->execute();
			if($stmt){
				$thismsg = array("msg" => '1');  
				$_SESSION['message'] = "record has been edited successfully";
			}
			else{
				$thismsg = array("msg" => '2');
			}
			$stmt->close();
	}
	echo json_encode($thismsg);
	$conn->close();
?>