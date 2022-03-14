<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Orders">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Orders</title>
</head>

<!-- 
	I have 3 pages in one. They're fixed into tabs and they become active when the tab's button is clicked.
 -->
<body id="orders-page" class="container with-bottom-menu bg-offwhite">
	<section id="header" class="header-primary header-with-tab">
		<div class="text constrain">
			<h1 class="name">Orders</h1>
		</div>

		<!-- 
			This is the tab buttons.
			When you click the buttons they activate the selected tab, clicking it also adds a ".active" class to both the button of the tab and the tab content.
			I have already implemented it using javascript.
		-->
		<div id="tabs" class="constrain">
			<button class="tab active" onclick="openTab(event, 'ongoing')"><span>Ongoing</span></button>
			<button class="tab" onclick="openTab(event, 'history')"><span>History</span></button>
			<button class="tab" onclick="openTab(event, 'draft')"><span>Draft</span></button>
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

			<a href="orders" style="padding: 20px 10px;" class="link link-secondary active">
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
	<!-- The tabs have empty states already designed. You can display them by adding a ".empty" class to the tab-content section. It'll look like this: "tab-content empty". I've done this for the Ongoing tab already.  -->
	<!-- This is the Ongoing tab -->
	<section id="ongoing" class="tab-content active empty">
		<div class="orders constrain">

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="id">
						<span>ID:</span> 43e2 116H
					</p>
					<p class="items">
						1 Item
					</p>
					<!-- This is the status of the order, The statuses have different classes to change the colors -->
					<p class="status waiting">Waiting</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="id">
						<span>ID:</span> 43e2 116H
					</p>
					<p class="items">
						1 Item
					</p>
					<p class="status waiting">Waiting</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="id">
						<span>ID:</span> 43e2 116H
					</p>
					<p class="items">
						1 Item
					</p>
					<p class="status dispatched">Dispatched</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="id">
						<span>ID:</span> 43e2 116H
					</p>
					<p class="items">
						1 Item
					</p>
					<p class="status dispatched">Dispatched</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="id">
						<span>ID:</span> 43e2 116H
					</p>
					<p class="items">
						1 Item
					</p>
					<p class="status waiting">Waiting</p>
				</div>
			</a>
		</div>

		<!-- This is the empty state of the Ongoing tab -->
		<div class="empty-state constrain">
			<img src="assets/images/others/idle-rider.png" height="300px" alt="Idle Rider">

			<div class="text">
				<h2>Ongoing is Empty</h2>
				<p>You can go to Discover to add products.</p>
			</div>

			<a href="discover" class="btn btn-primary">Go Discover</a>
		</div>
	</section>

	<!-- Tab content -->
	<!-- This is the History tab -->
	<section id="history" class="tab-content">
		<div class="orders constrain">

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="items">
						6 Items
					</p>
					<p class="date">Yesterday</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kfc.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="items">
						Lemon Juice Fresh
					</p>
					<p class="date">Jun 09, 2020</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="items">
						6 Items
					</p>
					<p class="date">Yesterday</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kfc.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="items">
						Lemon Juice Fresh
					</p>
					<p class="date">Jun 09, 2020</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="items">
						6 Items
					</p>
					<p class="date">Yesterday</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kfc.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="items">
						Lemon Juice Fresh
					</p>
					<p class="date">Jun 09, 2020</p>
				</div>
			</a>
		</div>

		<div class="empty-state constrain">
			<img src="assets/images/others/idle-rider.png" height="300px" alt="Idle Rider">

			<div class="text">
				<h2>History is Empty</h2>
				<p>You can go to Discover to add products.</p>
			</div>

			<a href="discover" class="btn btn-primary">Go Discover</a>
		</div>
	</section>

	<!-- Tab content -->
	<!-- This is the Draft tab -->
	<section id="draft" class="tab-content">
		<div class="orders constrain">

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					<p class="items">
						1 Item
					</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					<p class="items">
						1 Item
					</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					<p class="items">
						1 Item
					</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					<p class="items">
						1 Item
					</p>
				</div>
			</a>

			<a href="track-order" class="order">
				<div class="image">
					<img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Kichi Coffee & Drink</h5>
					<p class="address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</p>
					<p class="items">
						1 Item
					</p>
				</div>
			</a>
		</div>

		<div class="empty-state constrain">
			<img src="assets/images/others/idle-rider.png" height="300px" alt="Idle Rider">

			<div class="text">
				<h2>History is Empty</h2>
				<p>You can go to Discover to add products.</p>
			</div>

			<a href="discover" class="btn btn-primary">Go Discover</a>
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