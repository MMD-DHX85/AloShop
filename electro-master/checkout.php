<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<?php
	if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
		include('includes/header2.php');
		$login = true;
	} else
		include('includes/header.php');
	?>

	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<h3 class="breadcrumb-header">Checkout</h3>
					<ul class="breadcrumb-tree">
						<li><a href="#">Home</a></li>
						<li class="active">Checkout</li>
					</ul>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BREADCRUMB -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-7">
					<!-- Billing Details -->
					<?php if (isset($login)) {
						$Username = $_SESSION['Username'];
						$Password = $_SESSION['Password'];

						$conn = new PDO("mysql:host=localhost;dbname=Online_Shop", "root", "");
						$stmt = $conn->prepare("SELECT * FROM users WHERE Username='$Username';");
						$stmt->execute();
						$row = $stmt->fetch();
						?>
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name"
									value="<?php echo ($row['First_Name']); ?>">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name"
									value="<?php echo ($row['Last_Name']); ?>">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email"
									value="<?php echo ($row['Email']); ?>">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code" required>
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone" required>
							</div>
						</div>
					<?php } else { ?>
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code" required>
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone" required>
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Create Account?
									</label>
									<div class="caption">
										<p>Click <a href="sign up.php">Here</a> for creating new account</p>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					<!-- /Billing Details -->

					<!-- Shiping Details -->
					<div class="shiping-details">
						<div class="section-title">
							<h3 class="title">Shiping address</h3>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="shiping-address">
							<label for="shiping-address">
								<span></span>
								Ship to a diffrent address?
							</label>
							<div class="caption">
								<div class="form-group">
									<input class="input" type="text" name="first-name" placeholder="First Name">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="last-name" placeholder="Last Name">
								</div>
								<div class="form-group">
									<input class="input" type="email" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="address" placeholder="Address">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="city" placeholder="City">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="country" placeholder="Country">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
								</div>
								<div class="form-group">
									<input class="input" type="tel" name="tel" placeholder="Telephone">
								</div>
							</div>
						</div>
					</div>
					<!-- /Shiping Details -->

					<!-- Order notes -->
					<div class="order-notes">
						<textarea class="input" placeholder="Order Notes"></textarea>
					</div>
					<!-- /Order notes -->
				</div>

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">Your Order</h3>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>PRODUCT</strong></div>
							<div><strong>TOTAL</strong></div>
						</div>
						<!-- product -->
						<div class="order-products">
							<?php
							$cnt = $_SESSION['cart_count'];
							$Psub = 0;
							$ProCodes = "";

							for ($i = $cnt - 1; $i >= 0; $i--) {

								$pro = $_SESSION['cart'][$i];

								$stmt = $conn->prepare("SELECT * FROM products WHERE Pro_Code=" . $pro . ";");
								$stmt->execute();
								$row = $stmt->fetch(PDO::FETCH_ASSOC);
								
								$ProCodes=$ProCodes . $pro . ",";
								$Psub = $row['Pro_Price'] + $Psub;
								$Qty = 1;

								?>

								<div class="order-col">
									<div>
										<?php echo ($Qty . " x " . $row['Pro_Name']); ?>
									</div>
									<div>
										<?php echo ($row['Pro_Price']); ?>
									</div>
								</div>
							<?php } ?>
						</div>
						<!-- /product -->

						<div class="order-col">
							<div>Shiping</div>
							<div><strong>FREE</strong></div>
						</div>
						<div class="order-col">
							<div><strong>TOTAL</strong></div>
							<div><strong class="order-total"><?php echo($Psub); ?></strong></div>
						</div>
					</div>
					<div class="payment-method">
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-1">
							<label for="payment-1">
								<span></span>
								Direct Bank Transfer
							</label>
							<div class="caption">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-2">
							<label for="payment-2">
								<span></span>
								Cheque Payment
							</label>
							<div class="caption">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-3">
							<label for="payment-3">
								<span></span>
								Paypal System
							</label>
							<div class="caption">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="input-checkbox">
						<input type="checkbox" id="terms" required>
						<label for="terms">
							<span></span>
							I've read and accept the <a href="#">terms & conditions</a>
						</label>
					</div>
					<a href="#" class="primary-btn order-submit">Place order</a>
				</div>
				<!-- /Order Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<?php include("includes/footer.html"); ?>

</body>

</html>