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
	<section id="header" class="header-transparent-image" style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(0deg, rgba(34, 43, 69, 0.9), rgba(34, 43, 69, 0.9)), url(assets/images/cuisines/japanese.jpeg);">
	
		<div class="header-actions constrain">
			<a href="index" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>
		</div>

		<!-- This shows the name and address of the restaurant -->
		<div class="text constrain">
			<h1 class="name">Japanese</h1>
			<p>9 Foods </p>
		</div>
	</section>

	<!-- This is that menu at the bottom of every page -->
	<section id="bottom-menu">
		<div class="menu-links constrain">
			<a href="index" style="padding: 20px 10px;" class="link link-secondary active">
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

			<a href="profile" style="padding: 20px 10px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/profile.svg" height="20px" alt="Profile">
				<span>Profile</span>
			</a>
		</div>
	</section>

	<section id="products">
		<div class="products constrain">
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