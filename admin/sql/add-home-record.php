<?php
	include '../includes/connection.php';
	include '../includes/timezone.php';

	$filename_mission = $_FILES['photo_mission']['name'];
	$filename_vision = $_FILES['photo_vision']['name'];
	$filename_about = $_FILES['photo_about']['name'];

	if(!empty($_POST['mission']) && !empty($_POST['vision']) && !empty($_POST['about']) && !empty($_SESSION['admin']) && !empty($filename_mission) && !empty($filename_vision) && !empty($filename_about)){
		$mission = $_POST['mission'];
		$vision = $_POST['vision'];
		$about = $_POST['about'];
		$edited_by = $_SESSION['admin'];

		if(!empty($filename_mission)){
			$extension = pathinfo($filename_mission, PATHINFO_EXTENSION);

			$file_path = '../../images/background/';

			if(file_exists($file_path.$filename_mission)) {
				$randomID = uniqid();
				$filename_mission = $randomID.'.'.$extension;
			}
		}
		if(!empty($filename_vision)){
			$extension = pathinfo($filename_vision, PATHINFO_EXTENSION);

			$file_path = '../../images/background/';

			if(file_exists($file_path.$filename_vision)) {
				$randomID = uniqid();
				$filename_vision = $randomID.'.'.$extension;
			}
		}
		if(!empty($filename_about)){
			$extension = pathinfo($filename_about, PATHINFO_EXTENSION);

			$file_path = '../../images/background/';

			if(file_exists($file_path.$filename_about)) {
				$randomID = uniqid();
				$filename_about = $randomID.'.'.$extension;
			}
		}

			$sql = "UPDATE home SET mission = ?, mission_background = ?, vision = ?, vision_background = ?, about = ?, about_background = ?, edited_by = ? WHERE id = 1";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ssssssi",$mission,$filename_mission,$vision,$filename_vision,$about,$filename_about,$edited_by);
			$stmt->execute();
			if($stmt){
				move_uploaded_file($_FILES['photo_mission']['tmp_name'], ''.$file_path.''.$filename_mission);	
				move_uploaded_file($_FILES['photo_vision']['tmp_name'], ''.$file_path.''.$filename_vision);	
				move_uploaded_file($_FILES['photo_about']['tmp_name'], ''.$file_path.''.$filename_about);	
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