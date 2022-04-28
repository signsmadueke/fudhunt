<?php
require 'include/function4user.php';
if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
	$result = fetch_user($user_id);
	extract($result);

	// var_dump($result); 

}




?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Order Information">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">
	<link rel="stylesheet" href="assets/css/fullscreen.css">

	<title>Order Information</title>
</head>

<body id="order-information-page" class="container">
	<!-- Wrapping everything in a form so it can be submitted to the database. -->
	<section id="header" class="constrain header-white">
		<a href="#" onclick="history.back()" class="back link">
			<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
		</a>

		<div class="text">
			<h1 class="title">Order Information</h1>

			<p class="id">
				<span>ID:</span> 43e2116H
			</p>
		</div>
	</section>

	<!-- Delivery address -->
	<section id="delivery-address" class="constrain">
		<div class="header">
			<h4>Deliver to</h4>
			<a href="add-new-address" class="link link-primary">Add new address</a>
		</div>


		<div class="address">
			<div class="map">
				<img src="assets/images/others/address-map.png" height="100px" alt="Map">
			</div>
			<div class="details">
				<h5 class="location-address">
					<img class="svg" src="assets/images/icons/map-pointer.svg" height="9px" alt="Store">
					<span><?php $delivery_address =  $address . ", " . $city . ", " . $state;
							echo $delivery_address; ?></span>
				</h5>
				<p class="name">
					<img class="svg" src="assets/images/icons/person.svg" height="9px" alt="Store">
					<span><?php echo $fullname; ?></span>
				</p>
				<p class="phone">
					<img class="svg" src="assets/images/icons/telephone.svg" height="9px" alt="Store">
					<span><?php echo $phone; ?></span>
				</p>
			</div>
	</section>

	<!-- Details of the delivery. -->
	<section id="delivery-details">
		<div class="heading constrain">
			<div class="v-grid">
				<h5>Delivery Time</h5>
				<div class="h-grid">
					<p><?php echo date("h:i:sa"); ?></p>
					<p><?php echo date("Y/m/d"); ?></p>
				</div>
			</div>
		</div>

		<div class="cart-items constrain">
			<?php
			$cart = $_SESSION['cart'];
			$prize = [];
			$products = [];
			foreach ($cart as $key) {
				$cartsql = "SELECT * FROM food WHERE food_id = $key";
				$cartres = mysqli_query($link, $cartsql);
				$cart = mysqli_fetch_assoc($cartres);
				extract($cart);
				$food_prize = floatval($food_prize);
				array_push($prize, $food_prize);
				array_push($products, $food_name);
			?>
				<div class="cart-item">
					<div class="image">
						<img src="admin/<?php echo $food_pix; ?>" height="100px" alt="Restaurant Image">
					</div>
					<div class="details">
						<h5 class="name"><?php echo $food_name; ?></h5>
						<p class="product">$<?php echo $food_prize; ?></p>
					</div>
				</div>
			<?php }
			$p = array_sum($prize);



			?>
		</div>
	</section>

	<section id="cart-totals" class="constrain">
		<div class="h-grid">
			<p>Subtotal</p>
			<p>$<?php $pf = $p;
				echo $pf; ?></p>
		</div>
		<div class="h-grid">
			<p>Shipping Fee</p>
			<p>$7.99 (Flat Fee)</p>
		</div>
		<div class="totals">
			<h4>Total</h4>
			<h4>$<?php $pt = $p + 7;
					$pt = $pt;
					echo $pt;  ?></h4>
		</div>
	</section>

	<div class="submit constrain">
		<a href="#" onclick="window.print();" class="btn btn-outline-black">Print Receipt</a>
		<a href="index" class="btn btn-primary">Go Home</a>
	</div>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script> -->
	<!-- <script src="https://unpkg.com/flickity-fullscreen@1/fullscreen.js"></script> -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/flickity.js"></script>
	<script src="assets/js/fullscreen.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/smooth-scroll.js"></script>
</body>

</html>