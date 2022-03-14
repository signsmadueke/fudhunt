<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Address">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Address</title>
</head>


<!-- 
	This page shows Addresses
	There's basically
 -->

<body id="address-page" class="container with-bottom-menu bg-offwhite">

	<section id="header" class="constrain header-white">
		<div class="header-actions">
			<a href="profile" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>
		</div>

		<h1>Address</h1>
	</section>

	<section id="delivery-address">
		<div class="addresses constrain">

			<!-- This is an address -->
			<a href="#" class="address">
				<div class="details">
					<h5>Home</h5>
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
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
			</a>

			<!-- This is an address -->
			<a href="#" class="address">
				<div class="details">
					<h5>Work</h5>
					<h5 class="location-address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="9px" alt="Store">
						<span>23 White Boulevard</span>
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
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
			</a>

			<!-- This is the button that adds a new address -->
			<a href="add-new-address" class="btn">Add new Address</a>
			
		</div>
	</section>

	<!-- This is that menu at the bottom of every page -->
	<section id="bottom-menu">
		<div class="menu-links constrain">
			<a href="discover" style="padding: 20px 10px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/home.svg" height="20px" alt="Home">
				<span>Home</span>
			</a>

			<a href="nearby" style="padding: 20px 10px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/nearby.svg" height="20px" alt="Nearby">
				<span>Nearby</span>
			</a>

			<a href="cart" style="padding: 15px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/cart.svg" height="20px" width="20px" alt="Cart">
			</a>

			<a href="orders" style="padding: 20px 10px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/orders.svg" height="20px" alt="Orders">
				<span>Orders</span>
			</a>

			<a href="profile" style="padding: 20px 10px;" class="link link-secondary active">
				<img class="svg" src="assets/images/icons/menu/profile.svg" height="20px" alt="Profile">
				<span>Profile</span>
			</a>
		</div>
	</section>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script> -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/flickity.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/smooth-scroll.js"></script>
</body>

</html>