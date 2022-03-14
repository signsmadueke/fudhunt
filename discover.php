<?php
require_once 'admin/config/db.php';
// blockCRS($_SESSION['user'], 'login');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Discover">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Discover</title>
</head>

<body id="discover-page" class="bg-offwhite container with-bottom-menu">

	<!-- 
		.header primary below gives it the orange background.
	 -->
	<section id="search" class="header-primary">
		<div class="header">
			<a href="address" class="delivery-location link constrain">
				<h5>DELIVERING TO</h5>
				<p>
					<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Map Pointer">
					<span>76A Gwarimpa Estate, Abuja.</span>
					<span></span>
					<img class="svg" src="assets/images/icons/chevron-down.svg" height="10px" alt="Expand">
				</p>
			</a>

			<div class="search-box constrain">
				<form id="search-form" action="search-results" method="get" class="input-with-icon">
					<input type="search" id="search-input" placeholder="What are you searching for?">
					<button type="submit" class="btn"><img class="svg" src="assets/images/icons/search.svg"
							height="10px" alt="Search"></button>
				</form>
				<a href="#" class="btn close-search">
					<!-- Whenever the search popup is open, the filter.svg icon hides and the "Exit" text shows instead just as it was done in the Figma design. It works with the .searching class on the <body> tag. -->

					<!-- <img class="svg" src="assets/images/icons/filter.svg" height="15px" alt="Filter"> -->

					<p>Exit</p>
				</a>
			</div>
		</div>

		<div class="search-suggestions">
			<div class="search-history constrain">
				<div class="section-title with-link p-0">
					<h4>History</h4>
					<a href="#" class="link link-secondary">Clear All</a>
				</div>

				<!-- This is the search history of the user -->
				<div class="histories">
					<div class="history">
						<a href="#" class="link link-secondary">Milk Tea</a>
						<button type="button" class="btn">
							<img class="svg" src="assets/images/icons/clear.svg" height="10px" alt="Clear">
						</button>
					</div>
					<div class="history">
						<a href="#" class="link link-secondary">Rice Chicken</a>
						<button type="button" class="btn">
							<img class="svg" src="assets/images/icons/clear.svg" height="10px" alt="Clear">
						</button>
					</div>
					<div class="history">
						<a href="#" class="link link-secondary">Coffee</a>
						<button type="button" class="btn">
							<img class="svg" src="assets/images/icons/clear.svg" height="10px" alt="Clear">
						</button>
					</div>
					<!-- This button adds more content and displays older search histories -->
					<a href="#" class="chevron link-primary link">
						<span>View more</span>
						<img class="svg" src="assets/images/icons/chevron-down.svg" height="7px" alt="Arrow Down">
					</a>
				</div>
			</div>

			<!-- These are product suggestions from the searched keyword -->
			<div class="suggestions constrain">
				<div class="section-title with-link">
					<h4>Suggestions</h4>
					<a href="search-results" class="link link-primary">
						<span>View all</span>
						<img class="svg" src="assets/images/icons/double-chevron-right.svg" height="7px"
							alt="Arrow Right">
					</a>
				</div>

				<div class="slider"
					data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "10" }'>
					<div class="slide">
						<a href="#" class="product">
							<img class="image" src="assets/images/products/5.jpg" height="100px" alt="Product Results">
							<p class="name">Asia Food</p>
						</a>

						<a href="#" class="product">
							<img class="image" src="assets/images/products/3.jpg" height="100px" alt="Product Results">
							<p class="name">Fast Food</p>
						</a>
					</div>

					<div class="slide">
						<a href="#" class="product">
							<img class="image" src="assets/images/products/4.jpg" height="100px" alt="Product Results">
							<p class="name">Asia Food</p>
						</a>

						<a href="#" class="product">
							<img class="image" src="assets/images/products/6.jpg" height="100px" alt="Product Results">
							<p class="name">Fast Food</p>
						</a>
					</div>

					<div class="slide">
						<a href="#" class="product">
							<img class="image" src="assets/images/products/4.jpg" height="100px" alt="Product Results">
							<p class="name">Asia Food</p>
						</a>

						<a href="#" class="product">
							<img class="image" src="assets/images/products/6.jpg" height="100px" alt="Product Results">
							<p class="name">Fast Food</p>
						</a>
					</div>

					<div class="slide">
						<a href="#" class="product">
							<img class="image" src="assets/images/products/4.jpg" height="100px" alt="Product Results">
							<p class="name">Asia Food</p>
						</a>

						<a href="#" class="product">
							<img class="image" src="assets/images/products/6.jpg" height="100px" alt="Product Results">
							<p class="name">Fast Food</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- This is that menu at the bottom of every page -->
	<section id="bottom-menu">
		<div class="menu-links constrain">
			<a href="discover" style="padding: 20px 10px;" class="link link-secondary active">
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

			<a href="profile" style="padding: 20px 10px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/profile.svg" height="20px" alt="Profile">
				<span>Profile</span>
			</a>
		</div>
	</section>

	<section id="discover-adverts" class="constrain"
		data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "10" }'>
		<div class="advert">
			<a href="#" class="details">
				<div class="image">
					<img src="assets/images/banner/banner1.png" height="100px" alt="Advert">
				</div>
				<!-- the .flickity-image-support class is the hack we're using to make the slide images appear at full width. It's hidden with css. Just the image above shows. -->
				<div class="flickity-image-support">
					<h5>Advert</h5>
				</div>
			</a>
		</div>
		<div class="advert">
			<a href="#" class="details">
				<div class="image">
					<img src="assets/images/banner/banner2.png" height="100px" alt="Advert">
				</div>
				<div class="flickity-image-support">
					<h5>Advert</h5>
				</div>
			</a>
		</div>
		<div class="advert">
			<a href="#" class="details">
				<div class="image">
					<img src="assets/images/banner/banner3.png" height="100px" alt="Advert">
				</div>
				<div class="flickity-image-support">
					<h5>Advert</h5>
				</div>
			</a>
		</div>
	</section>

	<section id="categories" class="constrain">
		<div class="section-title with-link">
			<h4>Categories</h4>
			<a href="#" class="link link-primary">
				<span>View all</span>
				<img class="svg" src="assets/images/icons/double-chevron-right.svg" height="7px" alt="Arrow Right">
			</a>
		</div>

		<div class="categories"
			data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "10", "initialIndex": 2 }'>
			<div class="category">
				<a href="#" class="details">
					<div class="image">
						<img src="assets/images/categories/all.png" height="50px" alt="All">
					</div>
					<h5 class="name">All</h5>
				</a>
			</div>

			<div class="category">
				<a href="#" class="details">
					<div class="image">
						<img src="assets/images/categories/1.png" height="50px" alt="Food">
					</div>
					<h5 class="name">Food</h5>
				</a>
			</div>

			<div class="category">
				<a href="#" class="details">
					<div class="image">
						<img src="assets/images/categories/2.png" height="50px" alt="Fashion">
					</div>
					<h5 class="name">Fashion</h5>
				</a>
			</div>

			<div class="category">
				<a href="#" class="details">
					<div class="image">
						<img src="assets/images/categories/3.png" height="50px" alt="Beauty">
					</div>
					<h5 class="name">Beauty</h5>
				</a>
			</div>

			<div class="category">
				<a href="#" class="details">
					<div class="image">
						<img src="assets/images/categories/all.png" height="50px" alt="Cake">
					</div>
					<h5 class="name">Cake</h5>
				</a>
			</div>

			<div class="category">
				<a href="#" class="details">
					<div class="image">
						<img src="assets/images/categories/1.png" height="50px" alt="Food">
					</div>
					<h5 class="name">Food</h5>
				</a>
			</div>

			<div class="category">
				<a href="#" class="details">
					<div class="image">
						<img src="assets/images/categories/2.png" height="50px" alt="Fashion">
					</div>
					<h5 class="name">Fashion</h5>
				</a>
			</div>

			<div class="category">
				<a href="#" class="details">
					<div class="image">
						<img src="assets/images/categories/3.png" height="50px" alt="Beauty">
					</div>
					<h5 class="name">Beauty</h5>
				</a>
			</div>
		</div>
	</section>

	<section id="orders" class="constrain">
		<div class="section-title with-link">
			<h4>Products Ordered</h4>
			<a href="orders" class="link link-primary">
				<span>View all</span>
				<img class="svg" src="assets/images/icons/double-chevron-right.svg" height="7px" alt="Arrow Right">
			</a>
		</div>

		<div class="orders"
			data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "10", "initialIndex": 2 }'>
			<!-- 
				There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon on top of the product image.
			-->
			<div class="order bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/6.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Hot Salami Pizza</a>
						<p>
							<span class="price">$2.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>

			<div class="order">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/1.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Dungeness Crab Arancini</a>
						<p>
							<span class="price">$3.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>

			<div class="order bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/2.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Octopus</a>
						<p>
							<span class="price">$4.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>

			<div class="order">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/3.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Roasted Beet Salad</a>
						<p>
							<span class="price">$6.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>

			<div class="order bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/6.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Fried Cauliflower</a>
						<p>
							<span class="price">$3.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>

			<div class="order">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/4.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Carbonara Pizza</a>
						<p>
							<span class="price">$5.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="restaurants" class="constrain">
		<div class="section-title with-link">
			<h4>Favourite Restaurants</h4>
			<a href="bookmark" class="link link-primary">
				<span>View all</span>
				<img class="svg" src="assets/images/icons/double-chevron-right.svg" height="7px" alt="Arrow Right">
			</a>
		</div>

		<!-- 
			There's a ".bookmarked" class on the restaurants that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon on top of the restaurant logo.
		-->
		<div class="restaurants"
			data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "10", "initialIndex": 2 }'>
			<a href="business-details" class="restaurant">
				<div class="details">
					<div class="image">
						<img src="assets/images/restaurants/kfc.png" height="120px" alt="KFC">

						<!-- Bookmark icon -->
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</div>
					<div class="text">
						<h5>KFC</h5>
						<p>
							<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
							<span>76A Gwarimpa Estate, Abuja</span>
						</p>
					</div>
				</div>
			</a>

			<a href="business-details" class="restaurant bookmarked">
				<div class="details">
					<div class="image">
						<img src="assets/images/restaurants/cold-stone.png" height="120px" alt="KFC">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</div>
					<div class="text">
						<h5>Cold Stone Creamery</h5>
						<p>
							<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
							<span>230 Frederic Picnic Road</span>
						</p>
					</div>
				</div>
			</a>

			<a href="business-details" class="restaurant">
				<div class="details">
					<div class="image">
						<img src="assets/images/restaurants/lion-square.png" height="120px" altKFCaya">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</div>
					<div class="text">
						<h5>Lion Square</h5>
						<p>
							<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
							<span>8573 Torp Lake Estate, Abuja</span>
						</p>
					</div>
				</div>
			</a>

			<a href="business-details" class="restaurant bookmarked">
				<div class="details">
					<div class="image">
						<img src="assets/images/restaurants/kfc.png" height="120px" alt="KFC">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</div>
					<div class="text">
						<h5>KFC</h5>
						<p>
							<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
							<span>76A Gwarimpa Estate, Abuja</span>
						</p>
					</div>
				</div>
			</a>

			<a href="business-details" class="restaurant">
				<div class="details">
					<div class="image">
						<img src="assets/images/restaurants/cold-stone.png" height="120px" alt="KFC">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</div>
					<div class="text">
						<h5>Cold Stone Creamery</h5>
						<p>
							<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
							<span>230 Frederic Picnic Road</span>
						</p>
					</div>
				</div>
			</a>

			<a href="business-details" class="restaurant bookmarked">
				<div class="details">
					<div class="image">
						<img src="assets/images/restaurants/lion-square.png" height="120px" altKFCaya">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</div>
					<div class="text">
						<h5>Lion Square</h5>
						<p>
							<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
							<span>8573 Torp Lake Estate, Abuja</span>
						</p>
					</div>
				</div>
			</a>
		</div>
	</section>

	<section id="hot-sale" class="constrain">
		<div class="section-title with-link">
			<h4>Hot Sale</h4>
			<a href="#" class="link link-primary">
				<span>View all</span>
				<img class="svg" src="assets/images/icons/double-chevron-right.svg" height="7px" alt="Arrow Right">
			</a>
		</div>

		<div class="sales"
			data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "10", "initialIndex": 2 }'>

			<!-- 
				There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon on top of the product image.
			-->
			<div class="sale bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/7.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Margherita Pizza</a>
						<p>
							<span class="price">$3.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>

			<div class="sale">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/8.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Margherita Burrata</a>
						<p>
							<span class="price">$6.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>

			<div class="sale bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/9.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Burrata Pizza</a>
						<p>
							<span class="price">$7.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>

			<div class="sale bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/10.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Squid Ink Risotto</a>
						<p>
							<span class="price">$9.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>

			<div class="sale">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/11.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Funghi Misti Pizza</a>
						<p>
							<span class="price">$4.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>

			<div class="sale bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/12.jpg" height="120px" alt="Fried Noodles and Chicken">
						<button type="button" class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Chicken Parm Pasta</a>
						<p>
							<span class="price">$3.99</span>
							<button type="button" class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="nearby" class="">
		<div class="section-title with-link constrain">
			<h4>Nearby</h4>
			<a href="nearby" class="link link-primary">
				<span>View all</span>
				<img class="svg" src="assets/images/icons/double-chevron-right.svg" height="7px" alt="Arrow Right">
			</a>
		</div>

		<!-- 
			There's a ".bookmarked" class on the restaurant that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon.
		-->
		<div class="business constrain bookmarked">
			<div class="details h-grid">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="business-details" class="name">
								<h5>Kichi Coffee & Drink</h5>
							</a>
							<p>
								<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
								<span>76A Gwarimpa Estate, Abuja</span>
							</p>
						</div>

						<!-- Bookmark icon -->
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</div>
					<div class="h-grid second-row">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
					<div class="third-row">
						<div class="tag">Free Shipping</div>
					</div>
				</div>
			</div>

			<div class="products">
				<a href="#" class="product">
					<div class="image">
						<img src="assets/images/products/13.jpg" height="60px" alt="KFC">
					</div>
					<div class="text">
						<p class="name">Aperol Spritz</p>
						<p class="price">
							<b>$2.99</b>
						</p>
					</div>
				</a>
				<a href="#" class="product">
					<div class="image">
						<img src="assets/images/products/14.jpg" height="60px" alt="KFC">
					</div>
					<div class="text">
						<p class="name">Walnut Bread Burrata</p>
						<p class="price">
							<b>$5.99</b>
						</p>
					</div>
				</a>
				<a href="#" class="product">
					<div class="image">
						<img src="assets/images/products/15.jpg" height="60px" alt="KFC">
					</div>
					<div class="text">
						<p class="name">Arugula and Fennel Salad</p>
						<p class="price">
							<b>$3.99</b>
						</p>
					</div>
				</a>
				<a href="#" class="product">
					<div class="image">
						<img src="assets/images/products/16.jpg" height="60px" alt="KFC">
					</div>
					<div class="text">
						<p class="name">Saffron Risotto</p>
						<p class="price">
							<b>$7.99</b>
						</p>
					</div>
				</a>
			</div>
		</div>

		<div class="business constrain">
			<div class="details h-grid">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kfc.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="business-details" class="name">
								<h5>Kentucky Fried Chicken</h5>
							</a>
							<p>
								<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
								<span>76A Gwarimpa Estate, Abuja</span>
							</p>
						</div>
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</div>
					<div class="h-grid second-row">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
					<div class="third-row">
						<div class="tag">Free Shipping</div>
					</div>
				</div>
			</div>

			<div class="products">
				<a href="#" class="product">
					<div class="image">
						<img src="assets/images/products/17.jpg" height="60px" alt="KFC">
					</div>
					<div class="text">
						<p class="name">Walnut Toast</p>
						<p class="price">
							<b>$5.99</b>
						</p>
					</div>
				</a>
				<a href="#" class="product">
					<div class="image">
						<img src="assets/images/products/18.jpg" height="60px" alt="KFC">
					</div>
					<div class="text">
						<p class="name">Mushroom Pizza</p>
						<p class="price">
							<b>$7.99</b>
						</p>
					</div>
				</a>
				<a href="#" class="product">
					<div class="image">
						<img src="assets/images/products/19.jpg" height="60px" alt="KFC">
					</div>
					<div class="text">
						<p class="name">Bartenders Pizza</p>
						<p class="price">
							<b>$8.99</b>
						</p>
					</div>
				</a>
				<a href="#" class="product">
					<div class="image">
						<img src="assets/images/products/20.jpg" height="60px" alt="KFC">
					</div>
					<div class="text">
						<p class="name">Broccolini</p>
						<p class="price">
							<b>$9.99</b>
						</p>
					</div>
				</a>
			</div>
		</div>
	</section>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script> -->
	<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/flickity.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/smooth-scroll.js"></script>
</body>

</html>