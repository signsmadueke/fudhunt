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
			<a href="edit-profile" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>

			<div class="text">
				<h1 class="title">Order Information</h1>

				<p class="id">
					<span>ID:</span> 43e2 116H
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
						<span>76A Gwarimpa Estate, Abuja</span>
					</h5>
					<p class="name">
						<img class="svg" src="assets/images/icons/person.svg" height="9px" alt="Store">
						<span>Joy Obianaba</span>
					</p>
					<p class="phone">
						<img class="svg" src="assets/images/icons/telephone.svg" height="9px" alt="Store">
						<span>+234 (803) 878 2933</span>
					</p>
				</div>
			</div>
		</section>

		<!-- Details of the delivery. -->
		<section id="delivery-details">
			<div class="heading constrain">
				<div class="v-grid">
					<h5>Delivery Time</h5>
					<div class="h-grid">
						<p>10:11 AM</p>
						<p>Oct 6, 2020</p>
					</div>
				</div>
			</div>

			<div class="cart-items constrain">
				<div class="cart-item">
					<div class="image">
						<img src="assets/images/products/21.jpg" height="100px" alt="Restaurant Image">
					</div>
					<div class="details">
						<h5 class="name">Hot Salami Pizza</h5>
						<p class="product">$7.99</p>
					</div>
				</div>

				<div class="cart-item">
					<div class="image">
						<img src="assets/images/products/22.jpg" height="100px" alt="Restaurant Image">
					</div>
					<div class="details">
						<h5 class="name">Dungeness Crab Arancini</h4>
						<p class="product">$8.99</p>
					</div>
				</div>

				<div class="cart-item">
					<div class="image">
						<img src="assets/images/products/23.jpg" height="100px" alt="Restaurant Image">
					</div>
					<div class="details">
						<h5 class="name">Octopus</h5>
						<p class="product">$9.99</p>
					</div>
				</div>
			</div>
		</section>
		
		<section id="cart-totals" class="constrain">
			<div class="h-grid">
				<p>Subtotal</p>
				<p>$26.97</p>
			</div>
			<div class="h-grid">
				<p>Shipping Fee</p>
				<p>$7.00</p>
			</div>
			<div class="totals">
				<h4>Total</h4>
				<h4>$33.97</h4>
			</div>
		</section>
		
		<div class="submit constrain">
			<a href="rating" class="btn btn-outline-black">Rating</a>
			<button type="submit" class="btn btn-primary">Re-Order</button>
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