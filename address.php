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

	<section id="header" class="header-primary">
		<div class="header-actions constrain">
			<a href="#" onclick="history.back()" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>
		</div>

		<h1 class="constrain">Address</h1>
	</section>

	<section id="delivery-address">
		<form action="" class="addresses constrain">

			<!-- This is an address -->

			<?php
			$response = fetch_userAndAddress($user_id);
			$i = 1;
			if ($response) {
				foreach ($response as $row) {
					extract($row)

			?>
					<div class="address">
						<div class="details">
							<h5 class="location-address">
								<img class="svg" src="assets/images/icons/map-pointer.svg" height="9px" alt="Store">
								<span><?php echo $address . ", " . $city . " " . $zip . ", " . $state . ", " . $country; ?></span>
							</h5>
							<p class="name">
								<img class="svg" src="assets/images/icons/person.svg" height="9px" alt="Store">
								<span><?php echo $fullname; ?></span>
							</p>
							<p class="phone">
								<img class="svg" src="assets/images/icons/telephone.svg" height="9px" alt="Store">
								<span><?php echo $phone ?></span>
							</p>
						</div>
						<label class="radio">
							<input name="address" type="radio" checked>
							<span class="check"></span>
						</label>
					</div>

			<?php }
			} ?>


			<!-- This is the button that adds a new address -->
			<a href="add-new-address" class="btn">Add new Address</a>

		</form>
	</section>

	<!-- This is that menu at the bottom of every page -->
	<section id="bottom-menu">
		<div class="menu-links constrain">
			<a href="index" style="padding: 20px 10px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/home.svg" height="20px" alt="Home">
				<span>Home</span>
			</a>

			<a href="trending" style="padding: 20px 10px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/trending.svg" height="20px" alt="Trending">
				<span>Trending</span>
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