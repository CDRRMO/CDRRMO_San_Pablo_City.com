<?php
	include 'includes/connection.php';
	if(!isset($_SESSION['admin'])){
		header('location:index.php');
	}
?>