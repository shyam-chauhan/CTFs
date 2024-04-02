<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Cyber Force</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo-tcf.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		.custom-symbol {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-bottom: 10px;
		}

		.custom-symbol img {
			width: 120px;
			height: 100px;
		}

		.error-message {
			color: #000000;
			text-align: center;
			margin-top: 10px;
		}
	</style>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<?php
					// PHP code for authentication and displaying error message
					session_start();

					if ($_SERVER["REQUEST_METHOD"] == "POST") {


						$inputUsername = $_POST["color"];

						if ($_POST["color"] == 'lightblue' or $_POST["color"] == 'Lightblue') {
							// Successful login
							echo "Flag is : Hacker hai bhai Hacker hai !!";
						} 
						
						else {
							// Failed login
							$_SESSION["login"] = false;
							header('color: it is loght color');
							header('I_am_the_flag: l3WNUJ8zq5XvvpMBhsVmyEPqIjAshvW561Z+V6xRmYpMcfyFUki05oe0');
						}
					}
				?>

				<form class="login100-form validate-form" action="ctf1.php" method="post">
					<!-- Your custom symbol goes here -->
					<div class="custom-symbol">
						<!-- Add your custom symbol here -->
						<img src="images/icons/logo-tcf.png" alt="Custom Symbol">
					</div>

					<span class="login100-form-title p-b-30 p-t-20">
					</span>

					<!-- Display error message below the "Log in" title -->
					<div class="error-message">
						<?php
							if (isset($_SESSION["login"]) && $_SESSION["login"] === false) {
								echo 'Wrong color choice. Please try again.';
							}
						?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter"color">
						<input class="input100" type="text" name="color" placeholder="Guess The Colour">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					<div class="text-center p-t-60">

						<p class="powered-by p-t-30">Powered by TCF</br>
							Designed & Developed by Chuahan Shyam </br>
						</p>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min...

