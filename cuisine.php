<?php
require 'include/function4user.php';
if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
	$result = fetch_user($user_id);
	extract($result);

	// var_dump($result); 

}


if (isset($_GET['cuisine_id'])) {
	$cuisine_id = $_GET['cuisine_id'];
	$response = fetch_cuisine_food($cuisine_id);
	$nc = count($response);

	$cn = fetch_single_cuisine($cuisine_id);
	extract($cn);
} else {
	header('Location:' . $_SERVER['HTTP_REFERER']);
	exit();
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Cuisine">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">
	<link rel="stylesheet" href="assets/css/fullscreen.css">

	<title>Cuisine</title>
</head>

<!-- 
	This page is a bit complex, I have three pages in one.
	They're fixed into tabs and they become active when the tab's button is clicked.

	There's a "".bookmarked" class on the <body> tag, it helps to show that the restaurant is bookmarked by the user. Once the .bookmarked tag is added as a class it styles the bookmark icon in the header.
 -->

<body id="cuisine-page" class="bg-offwhite container with-bottom-menu bookmarked">

	<!-- So this <section id="header"> has a backgroud image, I don't know if it's meant to be dynamic but I've left a link to the image in the inline style of the section.  -->
	<section id="header" class="header-transparent-image" style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(0deg, rgba(34, 43, 69, 0.9), rgba(34, 43, 69, 0.9)), url(admin/<?php echo $cuisine_pix; ?>);">

		<div class="header-actions constrain">
			<a href="#" onclick="history.back()" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>
		</div>

		<!-- This shows the name and address of the restaurant -->
		<div class="text constrain">
			<h1 class="name"><?php echo $cuisine_name; ?></h1>
			<p><?php echo $nc; ?> Foods </p>
		</div>
	</section>

	<!-- This is that menu at the bottom of every page -->
	<section id="bottom-menu">
		<div class="menu-links constrain">
			<a href="index" style="padding: 20px 10px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/home.svg" height="20px" alt="Home">
				<span>Home</span>
			</a>

			<a href="trending" style="padding: 20px 10px;" class="link link-secondary active">
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

			<a href="profile" style="padding: 20px 10px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/profile.svg" height="20px" alt="Profile">
				<span>Profile</span>
			</a>
		</div>
	</section>

	<section id="products">
		<div class="products constrain">
			<?php
			$i = 1;
			if ($response) {
				foreach ($response as $row) {
					extract($row)
			?>


					<div class="product horizontal">
						<a href="#" class="image">
							<img src="admin/<?php echo $food_pix; ?>" height="120px" alt="#">
						</a>

						<div class="details">

							<a href="#" class="name">
								<h5><?php echo $food_name; ?></h5>
							</a>

							<button class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>

							<h5 class="price">$<?php echo $food_prize; ?></h5>
							<div class="quantity">
								<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
								<span class="value">0</span>
								<a href="addcart.php?food_id=<?php echo $food_id; ?>"><button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
								</a>
							</div>

						</div>
					</div>

			<?php }
			} ?>

			<!-- 			<div class="product horizontal bookmarked">
				<div class="image">
					<img src="assets/images/products/4.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
				</div>

				<div class="details">

					<div class="name">
						<h5>Burrata Pizza</h5>
					</div>

					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>

					<h5 class="price">$1,300</h5>
					<div class="quantity">
						<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
						<span class="value">0</span>
						<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
					</div>

				</div>
			</div>

			<div class="product horizontal">
				<div class="image">
					<img src="assets/images/products/3.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
				</div>

				<div class="details">

					<div class="name">
						<h5>Margherita Burrata</h5>
					</div>

					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>

					<h5 class="price">$1,300</h5>
					<div class="quantity">
						<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
						<span class="value">0</span>
						<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
					</div>

				</div>
			</div>

			<div class="product horizontal bookmarked">
				<div class="image">
					<img src="assets/images/products/4.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
				</div>

				<div class="details">

					<div class="name">
						<h5>Burrata Pizza</h5>
					</div>

					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>

					<h5 class="price">$1,300</h5>
					<div class="quantity">
						<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
						<span class="value">0</span>
						<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
					</div>

				</div>
			</div>

			<div class="product horizontal">
				<div class="image">
					<img src="assets/images/products/3.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
				</div>

				<div class="details">

					<div class="name">
						<h5>Margherita Burrata</h5>
					</div>

					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>

					<h5 class="price">$1,300</h5>
					<div class="quantity">
						<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
						<span class="value">0</span>
						<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
					</div>

				</div>
			</div>

			<div class="product horizontal bookmarked">
				<div class="image">
					<img src="assets/images/products/4.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
				</div>

				<div class="details">

					<div class="name">
						<h5>Burrata Pizza</h5>
					</div>

					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>

					<h5 class="price">$1,300</h5>
					<div class="quantity">
						<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
						<span class="value">0</span>
						<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
					</div>

				</div>
			</div> -->


		</div>
	</section>

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