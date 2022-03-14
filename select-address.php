<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Delivery Location">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Delivery Location</title>
</head>

<body id="delivery-location-page" class="container bg-offwhite with-bottom-menu">
	<section id="header" class="constrain header-white">
		<div class="navigation">
            <a href="address" class="back">
                <img class="svg" src="assets/images/icons/arrow-left.svg" height="5px" alt="Go back">
            </a>
        </div>	
		<div class="text">
			<h1 class="name">Delivery Location</h1>
		</div>
	</section>

	<section id="add-address" class="constrain">
		<div class="content">
			<h5 class="title">Type your Address</h5>

			<form action="" class="">
				<input name="address-search" placeholder="Search your address" value="330 15th Eighth Avenue, New York" type="text" />

				<button type="submit" class="btn btn-primary" name="add-address">Add new address</button>
			</form>
		</div>
		<!-- <div class="popup-overlay"></div> -->
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

	<script>
		var modal = document.getElementById("add-address-popup");
		var btn = document.getElementsByClassName("add-to-cart");
		var span = document.getElementsByClassName("close")[0];

		$(".add-to-cart").click(function () {
			var $modal = $('#add-address-popup');
			$modal.addClass('active');
		});

		$(".close-popup").click(function () {
			var $modal = $('#add-address-popup');
			$modal.toggleClass('active');
		});

		window.onclick = function (event) {
			if (event.target == modal) {
				var $modal = $('#add-address-popup');
				$modal.removeClass('active');
			}
		}
	</script>
</body>

</html>