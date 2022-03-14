<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Search Results">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Search Results</title>
</head>

<body id="search-results-page" class="bg-offwhite container with-bottom-menu">

	<section id="search" class="header-primary">
		<div class="header">
			<div class="search-box constrain">
				<form id="search-form" action="search-results" method="get" class="input-with-icon">
					<input type="search" id="search-input" placeholder="What are you searching for?" value="Shawarma">
					<button type="submit" class="btn"><img class="svg" src="assets/images/icons/search.svg" height="10px" alt="Search"></button>
				</form>
				<a href="discover" style="padding: 20px 10px;" class="btn close-search">
					<img class="svg" src="assets/images/icons/filter.svg" height="15px" alt="Filter">
					<p>Exit</p>
				</a>
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

	<!-- The number of results is supposed to be dynamic. -->
	<h6 class="constrain number-of-results">Approximately <span>134</span> results.</h6>

	<section id="search-results" class="constrain">
		<!-- 
			There's a ".bookmarked" class on the search results that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon on top of the result's logo.
		-->
		<div class="business bookmarked">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
							<p>
								<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
								<span>76A Gwarimpa Estate, Abuja</span>
							</p>
						</div>
						<!-- Bookmark-icon -->
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</div>
					<div class="h-grid second-row">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
		</div>

		<div class="business">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
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
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
		</div>

		<div class="business">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
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
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
		</div>

		<div class="business bookmarked">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
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
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
		</div>

		<div class="business bookmarked">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
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
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
		</div>

		<div class="business">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
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
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
		</div>

		<div class="business bookmarked">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
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
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
		</div>

		<div class="business bookmarked">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
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
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
		</div>

		<div class="business">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
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
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
		</div>

		<div class="business bookmarked">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
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
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
		</div>

		<div class="business">
			<div class="details h-grid">
				<a href="#" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="text">
					<div class="h-grid first-row">
						<div class="v-grid">
							<a href="#" class="name"><h5>Kichi Coffee & Drink</h5></a>
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
							<span>4.5</span>
						</p>

						<p class="time">0.4 Km</p>
					</div>
				</div>
			</div>
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
		$(document).ready(function () {

			$('body.with-bottom-menu').css({
				'padding-bottom': $('#bottom-menu').height() + "px"
				
			});
		});

	</script>
</body>
</html>