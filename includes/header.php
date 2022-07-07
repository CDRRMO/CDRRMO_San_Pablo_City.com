<?php
	include 'includes/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CDRRMO</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<link rel="icon" type="image/gif" sizes="16x16" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/datatables.css">
    <link rel="stylesheet" href="lib/dataTables.bootstrap.min.css" type="text/css" media="screen">
    <script src="lib/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="lib/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="lib/dataTables.bootstrap4.min.js" type="text/javascript"></script>
	<script src="lib/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
	<header>
		<div class="header-left">
			<nav class="nav-left">
				<ul>
					<li><strong><a style="color:white;" href="home.php">Home</a></strong></li>
					<li class="has-children">
						<a style="color:white;" href="javascript:void(0)">Information</a>
						<ul class="sub-menu">
							<li><a   href="emergency-hotline.php">Emergency Hotline</a></li>
							<li><a  href="brgy-hotline.php">Brgy. Hotline</a></li>
							<li><a  href="bulletin-board.php">Bulletin Board</a></li>
						</ul>
					</li>
					<li><a style="color:white;" href="concern-citizen.php">Concern Citizen</a></li>
				</ul>
			</nav>
		</div>
		<div class="header-center">
			<a href="home.php">
				<img src="images/cdrrmologo.png" />
			</a>
		</div>
		<div class="header-right">
			<nav class="nav-right">
				<ul>
					<li><a style="color:white;" href="hazard-map.php" >Hazard Map</a></li>
					<li><a style="color:white;" href="evacuation-center.php" >Evacuation Center</a></li>
				</ul>
			</nav>
		</div>
	</header>