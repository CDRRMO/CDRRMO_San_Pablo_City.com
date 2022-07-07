<?php 
	session_start(); 
	if(isset($_SESSION['admin'])){
	    header('Location: home.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CDRRMO</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" type="image/gif" sizes="16x16" href="images/favicon.ico">
	<style type="text/css">
		body{
			background-color: rgba(0, 0, 255, 0.5	);
			background-size: 100% 650px;
			background-repeat: no-repeat;
		}
		main{
			position: absolute;
			left: 30%;
			top: 5%;
			max-width: 480px;
			border: 1px solid #808080;
			margin: 50px auto;
			padding: 20px;
			background-color: rgba(0, 0, 0, .3); 
			
			border-radius: 8px;
		}
		.logo{
			
			text-align: center;
		}
		.logo > img{
			width: 30%;
			border-radius: 50%;
		}
		.form-heading{
			text-align: center;
		}
		.form-heading > h1{
			margin-bottom: 0
		}
		.form-heading > span{
			color: red;
		}
		.form-div{
			padding: 10px 0;
			text-align: center;
		}
		.form-div > input{
			padding: 5px 0;
		}
		.form-div > input:not([type="submit"]){
			border: 2px solid #aaa;
    		background-color: white;
    		border-radius: 4px;
    		padding:10px;
    		font-size: 16px;
    		width:80%;
		}
		.form-div > input[type="submit"]{
			padding: 10px 40px;
			background-color: rgba(0, 0, 70, 0.5);
			border: none;
			border-radius: 5px;
			font-weight: 600;
			cursor:pointer;
			color: white;

		}
	</style>
</head>
<body>
	<main>
		<div>
			<div class="logo">
				<img src="images/cdrrmologo.png">
			</div>
			<div class="form">
				<div class="form-heading">
					<h1 style="color: white;">Admin Login</h1>
					<span>
						<?php 
							if(isset($_SESSION['message'])){
								echo $_SESSION['message'];
								unset($_SESSION['message']);
							}
						?>
					</span>
				</div>
				<form method="post" action="login.php">
					<div class="form-div">
						<input type="text" name="username" placeholder="Username">
					</div>
					<div class="form-div">
						<input type="password" name="password" placeholder="Password">
					</div>
					<div class="form-div">
						<input type="submit" name="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</main>	
</body>
</html>