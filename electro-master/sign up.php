<?php session_start(); ?>
<!DOCTYPE HTML>
<html>

<head>
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<meta charset="uft-8">
</head>

<body>
	<?php
	if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
		header("location:Index.php");
		exit();
	}

	?>

	<script type="text/javascript">


		function check_pass() {
			var pass, repass;
			pass = document.getElementById("password").value;
			repass = document.getElementById("repassword").value;

			if (pass != repass) {
				alert("Password and Repassword are not the same!");
				return false;
			}
			else
				return true;
		}
	</script>
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-7">
					<!-- Billing Details -->
					<div class="login">
						<div class="section-title">
								<h1 class="title">Sign up</h1>
								</br></br>
								<form action="action_sign up.php" method="post" onsubmit="return check_pass()">

									<label for="Fname">First name:</label>
									<input class="input" type="text" id="Fname" name="Fname" required>

									<label for="Lname">Last name:</label>
									<input type="text" class="input" id="Lname" name="Lname" required>

									<label for="username">Username:</label>
									<input type="text" class="input" id="username" name="username" required>

									<label for="password">Password:</label>
									<input type="password" class="input" id="password" name="password" required>

									<label for="repassword">Repassword:</label>
									<input type="password" class="input" id="repassword" name="repassword" required>

									<label for="Email">Email:</label>
									<input type="text" class="input" id="Email" name="Email"></br></br>

									<input type="submit" class="primary-btn order-submit" id="btn" value="Register">

									<label>Do You have an Account?<a href="login.php" style="color:#0077cc;">Login
										</a></label>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>