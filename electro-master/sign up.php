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
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		
		<meta charset="uft-8">
	</head>
	<body>
	<?php
	if(isset($_SESSION['login'])&&$_SESSION['login']==true) 
	{
		header("location:Index.php");
		exit();
	}
	else
	include('includes/header.html');
	
	?>
	
	<script type="text/javascript">
		<!--
		
		function check_pass()
			{
				var pass,repass;
				pass=document.getElementById("password").value;
				repass=document.getElementById("repassword").value;
			
				if(pass!=repass)
				{
				alert("رمز عبور با تکرار آن منطبق نیست");
				return false;
				}
				else
					return true;
			}
		-->
	</script>
	<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
		<h1>ثبت نام در سایت</h1>
	<div class="login">
		<form  action="action_sign up.php" method="post" onsubmit="return check_pass()">
		
			<label for="Fname">:نام</label>
			<input type="text" id="Fname" name="Fname" required>
		
			<label for="Lname">:نام خانوادگی</label>
			<input type="text" id="Lname" name="Lname" required>
		
			<label for="username">:نام کاربری</label>
			<input type="text" id="username" name="username" required>
		
			<label for="password">:رمز عبور </label>
			<input type="password" id="password" name="password" required>
		
			<label for="repassword">:تکرار رمز عبور </label>
			<input type="password" id="repassword" name="repassword" required>
		
			<label for="Email">:ایمیل </label>	
			<input type="text" id="Email" name="Email">
			
			<input type="submit" id="btn" value="ثبت نام">
					
			<label>حساب کاربری دارید؟<a href="login.php" style="color:#0077cc;">ورود </a></label>
	</div>		
	</div>
	</div>
								</div>
								<!-- /Billing Details -->
								</div>
							</div>
					</div>
					
					<?php include("includes/footer.html"); ?>
	</body>
</html>