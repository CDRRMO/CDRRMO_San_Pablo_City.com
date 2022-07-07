<?php
	include '../includes/connection.php';

	if(!empty($_POST['bulletin-post'])){
		$bulletin_post = $_POST['bulletin-post'];

			$sql = "INSERT INTO bulletin (bulletin_post) VALUES (?)";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("s",$bulletin_post);
			$stmt->execute();
			if($stmt){
				$thismsg = array("msg" => '1');  
				$_SESSION['message'] = "post has been added successfully";
			}
			else{
				$thismsg = array("msg" => '2');
			}
			$stmt->close();
	}
	echo json_encode($thismsg);
	$conn->close();
?>