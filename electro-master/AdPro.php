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

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
				<?php
		
		
		if(isset($_SESSION['admin']) && $_SESSION['admin']==true)
		include('includes/header3.html');

		else
		echo"<script>alert('no');</script>";
		
			?>
				
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					
					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">New Product</h3>
									</div>
											<form action="action_NewPro.php" method="POST">
												<div class="asideput"><label for="ProCode">Product Code</label>
												<input placeholder="1000" class="input" type="text" id="ProCode" name="ProCode" required>
												<label for="ProName">Product Name</label>
												<input placeholder="ProArt" class="input" type="text" id="ProName" name="ProName" required></div>
												<label for="ProBrand">Product Brand</label>
												<input placeholder="Asus" class="input" type="text" id="ProBrand" name="ProBrand" required>
												<label for="ProCat">Product Category</label>
												<input placeholder="Laptop" class="input" type="text" id="ProCat" name="ProCat" required>
												<label for="ProPrice">Product Price</label>
												<input placeholder="$1999" class="input" type="text" id="ProPrice" name="ProPrice" required>
												<label for="ProPrice">Product Inventory</label>
												<input placeholder="2(Qty)" class="input" type="text" id="ProQty" name="ProQty" required>
												<label for="ProIntro">Product Introduction</label>
												<div class="order-notes">
													<textarea name="ProIntro" class="input" placeholder="Ex: ASUS Laptop best for programmers"></textarea>
												</div>
												<label for="ProDetail">Product Details</label>
												<div class="order-notes">
													<textarea name="ProDetail" class="input" placeholder="Ex: CPU Intel i5 13th Gen"></textarea>
												</div>
												<label for="ProDesc">Product Description</label>
												<div class="order-notes">
													<textarea name="ProDesc" class="input" placeholder="Ex: Windows 11 with best quality and performance"></textarea>
												</div>
												
												<label for="ProPic">Product Picture</label>
												<input type="file" name="ProPic">

												<button class="primary-btn order-submit">Product Register</button></br></br>
												
										</form>
									</div>
								</div>
							</div>
						</div>
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
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?php include("includes/footer.html"); ?>

	</body>
</html>
