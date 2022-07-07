<?php  

include 'includes/connection.php';

if (isset($_POST['delete']))
	{
		$deleteID = $_POST['deleteID'];	

		$query_delete = "DELETE FROM accident_record WHERE id = $deleteID";
		$sql_delete = mysqli_query($conn, $query_delete);

		echo '<script> alert ("Successfully Deleted!")</script>';
		echo '<script> window.location.href = "./accident-record.php" </script>';
	}
	else
	{
		echo '<script> window.location.href = "./accident-record.php" </script>';
	}




?>