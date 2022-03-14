<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Nearby">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Nearby</title>
</head>

<!-- 
	I have many pages in one. They're fixed into tabs and they become active when the tab's button is clicked.
 -->

<body id="nearby-page" class="container with-bottom-menu bg-offwhite">
	<section id="header" class="header-primary header-with-tab">
		<div class="text constrain">
			<h1 class="name">Nearby</h1>
		</div>

		<!-- 
			This is the tab buttons.
			When you click the buttons they activate the selected tab, clicking it also adds a ".active" class to both the button of the tab and the tab content.
			I have already implemented it using javascript.
		-->
		<div id="tabs" class="constrain">
			<button class="tab active" onclick="openTab(event, 'food')"><span>Food</span></button>
			<button class="tab" onclick="openTab(event, 'drinks')"><span>Drinks</span></button>
			<button class="tab" onclick="openTab(event, 'cakes')"><span>Cakes</span></button>
			<button class="tab" onclick="openTab(event, 'rice')"><span>Rice</span></button>
			<button class="tab" onclick="openTab(event, 'coffee')"><span>Coffee</span></button>
			<button class="tab" onclick="openTab(event, 'fries')"><span>Fries</span></button>
		</div>
	</section>

	<!-- This is that menu at the bottom of every page -->
	<section id="bottom-menu">
		<div class="menu-links constrain">
			<a href="discover" style="padding: 20px 10px;" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/home.svg" height="20px" alt="Home">
				<span>Home</span>
			</a>

			<a href="nearby" style="padding: 20px 10px;" class="link link-secondary active">
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

	<!-- Tab content -->
	<!-- This is the Food tab -->
	<section id="food" class="tab-content nearby-businesses active">
		<div class="businesses constrain">

			<!-- 
				There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon on top of the product image.
			-->
			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>

					<!-- Bookmark icon -->
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Tab content -->
	<!-- This is the Drinks tab -->
	<section id="drinks" class="tab-content nearby-businesses">
		<div class="businesses constrain">

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Tab content -->
	<!-- This is the Cakes tab -->
	<section id="cakes" class="tab-content nearby-businesses">
		<div class="businesses constrain">

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Tab content -->
	<!-- This is the Rice tab -->
	<section id="rice" class="tab-content nearby-businesses">
		<div class="businesses constrain">

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Tab content -->
	<!-- This is the Cofee tab -->
	<section id="coffee" class="tab-content nearby-businesses">
		<div class="businesses constrain">

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Tab content -->
	<!-- This is the Fries tab -->
	<section id="fries" class="tab-content nearby-businesses">
		<div class="businesses constrain">

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
					</div>
				</div>
			</div>

			<div class="business bookmarked">
				<a href="business-details" class="image">
					<img src="assets/images/restaurants/kichi.png" height="85px" alt="kichi">
				</a>
				<div class="details">
					<a href="business-details" class="name">
						<h5>Kichi Coffee</h5>
					</a>
					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					
					<div class="bottom">
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							<b>4.5</b>
							<span>(1256)</span>
						</p>

						<p class="time">30 Min <span>•</span> 0.4 Km</p>
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
		// FOR THE TABS
		function openTab(evt, tabTitle) {
			// Declare all variables
			var i, tabcontent, tab;

			// Get all elements with class="tabcontent" and hide them
			tabcontent = document.getElementsByClassName("tab-content");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			// // Get all elements with class="tab" and remove the class "active"
			tab = document.getElementsByClassName("tab");
			for (i = 0; i < tab.length; i++) {
				tab[i].className = tab[i].className.replace(" active", "");
			}

			// Show the current tab, and add an "active" class to the button that opened the tab
			document.getElementById(tabTitle).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>
</body>

</html>