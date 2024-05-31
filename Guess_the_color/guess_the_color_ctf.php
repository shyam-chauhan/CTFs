<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Cyber Force</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo-tcf.png"/>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

	<!-- Hamburgers CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">

	<!-- Animsition CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css">

	<!-- Date Range Picker CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/4.1.3/daterangepicker.min.css">

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

