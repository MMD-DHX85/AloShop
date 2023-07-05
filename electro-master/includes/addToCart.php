<?php 



			if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id']))
			{

			   if (!isset($_SESSION['cart']))
			   {
				   $_SESSION['cart'] = array(); // initialize the cart
			   }
			   
			   $product_id = $_POST['product_id'];

			   if (!in_array($product_id, $_SESSION['cart']))
			   {
				   $_SESSION['cart'][] = $product_id; // add the product to the cart                   
			   }
			   
			   $_SESSION['cart_count'] = count($_SESSION['cart']); // update the cart count
		   
		    }

?>