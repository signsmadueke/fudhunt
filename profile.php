<?php
require_once 'admin/config/db.php';
// blockCRS($_SESSION['user'], 'login');
$user_id = $_SESSION['user'];

$user_profile = getWhere('users', 'user_id', $user_id);
if (isset($user_profile)) {
	foreach ($user_profile as $user) {
		extract($user);
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Profile">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Profile</title>
</head>

<body id="profile-page" class="container with-bottom-menu bg-offwhite">
	<section id="header" class="header-primary">
		<div class="text constrain">
			<h1 class="name">Profile</h1>
		</div>

		<a href="edit-profile" class="user-details constrain">
			<div class="image">
				<img src="assets/images/humans/1.png" height="70px" alt="Fried Noodles">
			</div>
			
			<div class="details">
				<h3 class="name"><?= $fullname; ?></h3>
				<!-- <p>+234 (803) <?= $phone; ?></p> -->
				<p>(+234) <?= $phone; ?></p>
			</div>
			
			<img class="svg chevron-icon" src="assets/images/icons/chevron-right.svg" height="20px">
		</a>

	</section>

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

	<section id="settings">
		<div class="setting-group constrain">
			<a href="payment-methods" class="setting">
				<span class="icon"><img class="svg" src="assets/images/icons/profile/payment.svg" width="20px" height="20px"></span>
				<p class="name">Payment Methods</p>
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
			</a>

			<a href="address" class="setting">
				<span class="icon"><img class="svg" src="assets/images/icons/profile/address.svg" width="20px" height="20px"></span>
				<p class="name">Address</p>
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
			</a>

			<a href="bookmarks" class="setting">
				<span class="icon"><img class="svg" src="assets/images/icons/profile/bookmark.svg" width="20px" height="20px"></span>
				<p class="name">Bookmarks</p>
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
			</a>
		</div>

		<!-- <div class="setting-group constrain">
			<a href="#" class="setting">
				<span class="icon"><img class="svg" src="assets/images/icons/profile/notifications.svg" width="16px"></span>
				<p class="name">Notifications</p>
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
			</a>

			<a href="#" class="setting">
				<span class="icon"><img class="svg" src="assets/images/icons/profile/language.svg" width="16px"></span>
				<p class="name">Language</p>
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
			</a>

			<a href="#" class="setting">
				<span class="icon"><img class="svg" src="assets/images/icons/profile/settings.svg" width="16px"></span>
				<p class="name">Settings</p>
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
			</a>

			<a href="#" class="setting">
				<span class="icon"><img class="svg" src="assets/images/icons/profile/invite.svg" width="16px"></span>
				<p class="name">Invite Friends</p>
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
			</a>

			<a href="#" class="setting">
				<span class="icon"><img class="svg" src="assets/images/icons/profile/support.svg" width="16px"></span>
				<p class="name">Support</p>
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
			</a>
		</div> -->

		<div class="setting-group constrain">
			<a href="logout" class="setting">
				<span class="icon"><img class="svg" src="assets/images/icons/profile/logout.svg" width="16px"></span>
				<p class="name">Logout</p>
				<span class="chevron-icon"><img class="svg" src="assets/images/icons/chevron-right.svg" height="20px"></span>
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