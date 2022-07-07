<?php
	include '../includes/connection.php';
	include '../includes/timezone.php';

	if(!empty($_POST['cctizen-name']) && !empty($_POST['cctizen-contact']) && !empty($_POST['cctizen-address']) && !empty($_POST['cctizen-concern'])){
		$cctizen_name = $_POST['cctizen-name'];
		$cctizen_contact = $_POST['cctizen-contact'];
		$cctizen_address = $_POST['cctizen-address'];
		$cctizen_concern = $_POST['cctizen-concern'];
		$admin_message = "Thank you for  concern we will get back on you as soon as posible CDRRMO.";

			$sql = "INSERT INTO concern_citizen (concern_name, concern_contact, concern_address, concern, concern_date) VALUES (?,?,?,?,?)";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sssss",$cctizen_name,$cctizen_contact,$cctizen_address,$cctizen_concern, $date);
			$stmt->execute();
			if($stmt){
				$curl = curl_init();
				$authEncoded = base64_encode('chitocamachojr:Chitocamachojr3!');
				curl_setopt_array($curl, array(
				    CURLOPT_URL => 'https://nz1v45.api.infobip.com/sms/2/text/advanced',
				    CURLOPT_RETURNTRANSFER => true,
				    CURLOPT_ENCODING => '',
				    CURLOPT_MAXREDIRS => 10,
				    CURLOPT_TIMEOUT => 0,
				    CURLOPT_FOLLOWLOCATION => true,
				    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				    CURLOPT_CUSTOMREQUEST => 'POST',
				    CURLOPT_POSTFIELDS =>'{"messages":[{"from":"CDRRMO_SPC","destinations":[{"to":"+63'.$cctizen_contact.'"}],"text":"'.$admin_message.'"}]}',
				    CURLOPT_HTTPHEADER => array(
				        'Authorization: Basic '.$authEncoded.'',
				        'Content-Type: application/json',
				        'Accept: application/json'
				    ),
				));

				$response = curl_exec($curl);

				curl_close($curl);

				$thismsg = array("msg" => '1');  
				$_SESSION['message'] = "Message has been submitted successfully.";
			}
			else{
				$thismsg = array("msg" => '2');
			}
			$stmt->close();
	}
	echo json_encode($thismsg);
	$conn->close();
?>

