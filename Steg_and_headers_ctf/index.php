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
						$correctUsername = "N3wbIeH4ker";
						$correctPassword = "H4ck1ngTCF";

						$inputUsername = $_POST["username"];
						$inputPassword = $_POST["pass"];

						if ($_POST["username"] == 'N3wbIeH4ker' && $_POST["pass"] == 'H4ck1ngTCF') {
							// Successful login
							$_SESSION["login"] = true;
							$role = 'user';
							header("Location: dashboard.php?role=" . urlencode($role));
							exit();
						} 
						elseif($_POST["username"] == '3L173U5#R' && $_POST["pass"] == '4L4N&UR1NG') {
							$_SESSION["login"] = true;
							$role = 'user';
							header("Location: dashboard2.php?role=" . urlencode($role));
							exit();
						}
						else {
							// Failed login
							$_SESSION["login"] = false;
							header('header: SWYgeW91IGhhdmUgZm91bmQgdGhpcyB0aGFuIHlvdSBub3cgcHJvYmFibHkga25vdyB0aGF0IHRoaXMgd2FzIG5vdCBhbnkgdHlwZSBvZiBoZWFkZXIuCgpEbyB5b3Uga25vdyBhYm91dCAyIGZhY3RvciBhdXRoZW50aWNhdGlvbiA/IHRoaXMgaXMgdGhlIHNhbWUgISAKMiBrZXlzIGFyZSBnaXZlbiB0aGVyZSBhcyBJRCBhbmQgcGFzc3dvcmQsIHRoZSBhY3R1YWwgSUQgYW5kIHBhc3N3b3JkIGlzIGVuY3J5cHRlZCB1c2luZyByYzUtY2ZiIGFuZCBhZXMtMTkyLWN0ciBlbmNyeXB0aW9uIGFuZCBnaXZlbiB0aGVyZSBhcyBJX2FtX3RoZV9mbGFnLiAKdHJ5IGRlY29kaW5nIGl0IGFuZCB0cnlpbmcgYm90aCBrZXlzIG9uZSBieSBvbmUgaW4gYW55IHNlcXVlbmNlLCB5b3Ugd2lsbCBmaW5kIG91dCB0aGUgYWN0dWFsIElEIGFuZCBwYXNzd29yZC4KCkEgY2VydGlmaWNhdGUgaXMgYWxzbyB0aGVyZTsgaWYgeW91IGNhbiBmaW5kIGl0LCB3ZWxjb21lIGFib2FyZC4KSGF2ZSBmdW4sIGhhcHB5IGxlYXJuaW5nIHdpdGggVGhlIEN5YmVyIEZvcmNlLg==');
							header('I_am_the_flag: l3WNUJ8zq5XvvpMBhsVmyEPqIjAshvW561Z+V6x0vYn/OpdLiXETBTOJ5uCfodoRmYpMcfyFUki05oe0');
							header('id: QXDW5eFEjZ');
							header('password: 19yDOhYdrXHzFvLZiJyafm6L');
						}
					}
				?>

				<form class="login100-form validate-form" action="index.php" method="post">
					<!-- Your custom symbol goes here -->
					<div class="custom-symbol">
						<!-- Add your custom symbol here -->
						<img src="images/icons/logo-tcf.png" alt="Custom Symbol">
					</div>

					<span class="login100-form-title p-b-30 p-t-20">
						Log in
					</span>

					<!-- Display error message below the "Log in" title -->
					<div class="error-message">
						<?php
							if (isset($_SESSION["login"]) && $_SESSION["login"] === false) {
								echo 'Login failed. Please try again.';
							}
						?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					<div class="text-center p-t-60">
						<a class="txt1" href="forgot_password.php">
							Forgot Password?
						</a>

						<p class="powered-by p-t-30">Powered by TCF</br>
							Designed by Chuahan Shyam </br>
							Inspired By Sandeep Verma
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

