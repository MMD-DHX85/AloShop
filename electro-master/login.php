<?php session_start();?>
<!DOCTYPE HTML>
<html>
	<head>
	<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/cart.css"/>
		
	</head>
	<body>
				<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					
					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">login</h3></div>
								
									
		
										<form action="action_Login.php" method="POST">
											<label for="username">Username</label>
											<input class="input" type="text" id="username" name="username" required>
											<label for="password">Password</label>
											<input class="input" type="password" id="password" name="password" required>
											<button class="primary-btn order-submit">Login</button></br></br>
											<label>Don't you have an acount?<a href="sign up.php" style="color:#0077cc;">Sign up</a></label>
										</form>
										</div>
									</div>
								</div>
							</div>
							<!-- /Billing Details -->
						
					</div>
				
					
					
	</body>
</html>