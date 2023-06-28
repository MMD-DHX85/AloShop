<?php 
session_start();



?>
<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro-Master Shop</title>

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
		  < src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></>
		<![endif]-->

    </head>
	<body>
		<?php
			
	   
		if(isset($_SESSION['login']) && $_SESSION['login']===true)
		 include('includes/header2.php');
		 
		else if(isset($_SESSION['admin']) && $_SESSION['admin']===true)
		include('includes/header3.html');
		
		else
		include('includes/header.html');
		
		
		if(isset($_GET['message']))
		{
			if($_GET['message']=="Signup_success")
			{
				echo "<script>
						alert('{$_SESSION['FName']}'+' welcome to our website ');
						</script>";
			}
			else if($_GET['message']=="login_success")
			{
				echo "<script>
						alert('{$_SESSION['FName']}'+' Welcome to your account ');
						</script>";
			}
			else if($_GET['message']=="login_failed")
			{
				echo "<script>
						alert('Login Failed');
						</script>";
			}
			else if($_GET['message']=="Signup_failed")
			{
				echo "<script>
						alert('Sign up Failed');
						</script>";
			}
			
			else if($_GET['message']=="login_error")
			{
				echo "<script>
						alert('Database Error');
						</script>";
			}
		}
		$cart=0;
		$pro="";
		
		$conn=new PDO("mysql:host=localhost;dbname=Online_Shop","root","");
		?>
		

		
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" width="500" height="300" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" width="500" height="300" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" width="500" height="300" alt="">
							</div>
							<div class="shop-body">
								<h3>Component<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">کد 1000</p>
												<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
												<h4 class="product-price">21.000.000 <del class="product-old-price">30.000.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">افزودن به فهرست دلخواه</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">نمایش محصول</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button onclick="<?php $cart++; $pro='1000'; ?>" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> افزودن به سبد خرید</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">لپ تاپ</p>
												<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
												<h4 class="product-price">21.000.000 <del class="product-old-price">30.000.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">افزودن به فهرست دلخواه</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">نمایش محصول</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> افزودن به سبد خرید</button>
											</div>
										</div>
										<!-- /product -->

											<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">لپ تاپ</p>
												<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
												<h4 class="product-price">21.000.000 <del class="product-old-price">30.000.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">افزودن به فهرست دلخواه</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">نمایش محصول</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> افزودن به سبد خرید</button>
											</div>
										</div>
										<!-- /product -->

											<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">لپ تاپ</p>
												<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
												<h4 class="product-price">21.000.000 <del class="product-old-price">30.000.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">افزودن به فهرست دلخواه</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">نمایش محصول</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> افزودن به سبد خرید</button>
											</div>
										</div>
										<!-- /product -->

											<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">لپ تاپ</p>
												<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
												<h4 class="product-price">21.000.000 <del class="product-old-price">30.000.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">افزودن به فهرست دلخواه</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">نمایش محصول</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> افزودن به سبد خرید</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">HOT DEAL THIS WEEK</h2>
							<p>NEW COLLECTION UP TO 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top Offers</h3>
						
						</div>
					</div>
					<!-- /section title -->
					<?php 
					$stmtOff=$conn->prepare("SELECT * FROM `products` WHERE Off>5;");
					$stmtOff->execute();
				
					
					?>
					
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php while($rowOff=$stmtOff->fetch())
										{ 
											$stmtimg=$conn->prepare("SELECT * FROM `image` WHERE Pro_Code=?;");
											$stmtimg->bindParam(1, $rowOff['Pro_Code']);
											$stmtimg->execute();
											$rowimg=$stmtimg->fetch(); ?>
										<div class="product">
											<div class="product-img">
												<img src="<?php echo $rowimg['Path']; ?>" alt="">
												<div class="product-label">
													<span class="sale"><?php echo("-" . $rowOff['Off'] . "%"); ?></span>
												</div>
											</div>
											<?php
											 $Off=($rowOff['Pro_Price']/100)*$rowOff['Off'];
											 $price=$rowOff['Pro_Price']-$Off; ?>
											<div class="product-body">
												<p class="product-category"><?php echo($rowOff['Pro_Cat']); ?></p>
												<h4 class="product-name"><?php echo($rowOff['Pro_Brand']); ?></h4>
												<h3 class="product-name"><a href="Product.php?pro=<?php echo($rowOff['Pro_Code']); ?>"><?php echo($rowOff['Pro_Name']); ?></a></h3>
												<h4 class="product-price"><?php echo($rowOff['Pro_Price']); ?> <del class="product-old-price"><?php echo($price); ?></del></h4>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Add to wishlist</span></button>
													
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">View Product</span></button>
													
												</div>
											</div>
											<div class="add-to-cart">
												<form id="addToCartForm" method="POST">
													<button id="addToCartBtn" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
													<input type="number" name="product_id" hidden value="<?php echo($rowOff['Pro_Code']); ?>">
												</form>
											</div>
										</div><?php } ?>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top Selling</h4>
							
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
						</div>
						<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top Selling</h4>
							
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
						</div>
						<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top Selling</h4>
							
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">لپ تاپ</p>
										<h3 class="product-name"><a href="#">لپ تاپ Asus</a></h3>
										<h4 class="product-price">21.000.000 <del class="product-old-price">2</del></h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
						</div>
						<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?php include("includes/footer.html"); ?>

	</body>
</html>
