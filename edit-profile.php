<?php
require_once 'include/header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Edit Profile">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Edit Profile</title>
</head>

<body id="edit-profile-page" class="container with-bottom-menu bg-offwhite">
	<section id="header" class="header-primary">
		<div class="header-actions constrain">
			<a href="#" onclick="history.back()" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>
			<button class="link save">Save</button>
		</div>

		<div class="text constrain">
			<h1 class="name">Edit Profile</h1>
		</div>
	</section>

	<section id="display-picture" class="constrain">
		<div class="image">
			<img src="assets/images/humans/avatar.png" height="90px" alt="Display Picture">
			<!-- When the add-picture button is clicked, a file picker pops up and the image that is selected is supposed to replace the profile image.  -->
			<button class="add-picture btn">
				<label for="change-dp" class="change-dp">
					<!-- This is the image that should be replace when a user uploads a new one -->
					<img class="svg" src="assets/images/icons/plus.svg" width="30px" alt="Add Picture">
				</label>
			</button>
			<!-- This is the input that handles the image upload. It's hidden. -->
			<input id="change-dp" name="change-dp" type="file" accept="image/*" onchange="readURL(this);">
		</div>
	</section>

	<section id="profile-settings">
		<form action="verification" class="settings constrain">
			<div class="setting form-row">
				<div class="details">
					<input value="<?php echo $fullname; ?>" type="text" placeholder="Full name" name="fullname" id="fullname">
					<label for="fullname">Full Name</label>
				</div>
			</div>

			<div class="setting form-row">
				<div class="details">
					<input value="<?php echo $fullname; ?>" type="text" placeholder="Email" name="email" id="email">
					<label for="email">Email Address</label>
				</div>
			</div>

			<div class="setting form-row">
				<div class="details">
					<input value="<?php echo $fullname; ?>" type="text" placeholder="Phone Number" name="phone" id="phone">
					<label for="phone">Phone Number</label>
				</div>
			</div>

			<div class="setting form-row">
				<div class="details">
					<input type="password" placeholder="Password" name="password" id="password">
					<label for="password">Password</label>
					<!-- This is the error text, it displays form errors. -->
					<!-- <p class="error">Password is incorrect.</p> -->
				</div>
			</div>

			<div class="setting form-row">
				<div class="details">
					<input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword">
					<label for="cpassword">Confirm Password</label>
					<!-- This is the error text, it displays form errors. -->
					<!-- <p class="error">Password doesn't match.</p> -->
				</div>
			</div>

			<div></div>

			<div class="setting form-row">
				<button type="submit" class="btn btn-primary">Continue</button>
			</div>
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