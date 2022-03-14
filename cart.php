<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Cart">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Cart</title>
</head>

<!-- 
	I have two pages in one. They're fixed into tabs and they become active when the tab's button is clicked.
 -->

<body id="cart-page" class="container with-bottom-menu bg-offwhite">
	<section id="header" class="header-primary">
		<div class="text constrain">
			<h1 class="name">Cart</h1>
		</div>
	</section>

	<section id="cart">
		<div class="cart-item constrain">
			<a href="#" class="image">
				<img src="assets/images/products/21.jpg" height="120px" alt="Fried Noodles Salad and Chicken Wings">
			</a>
			<div class="details">
				<a href="#" class="name">Hot Salami Pizza</a>
				<h5 class="price">$7.99</h5>
				<div class="quantity">
					<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
					<span class="value">0</span>
					<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
				</div>
			</div>
		</div>

		<div class="cart-item constrain">
			<a href="#" class="image">
				<img src="assets/images/products/22.jpg" height="120px" alt="Fried Noodles Salad and Chicken Wings">
			</a>
			<div class="details">
				<a href="#" class="name">Dungeness Crab Arancini</a>
				<h5 class="price">$8.99</h5>
				<div class="quantity">
					<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
					<span class="value">0</span>
					<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
				</div>
			</div>
		</div>

		<div class="cart-item constrain">
			<a href="#" class="image">
				<img src="assets/images/products/23.jpg" height="120px" alt="Fried Noodles Salad and Chicken Wings">
			</a>
			<div class="details">
				<a href="#" class="name">Octopus</a>
				<h5 class="price">$9.99</h5>
				<div class="quantity">
					<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
					<span class="value">0</span>
					<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
				</div>
			</div>
		</div>
	</section>

	<section id="cart-totals">
		<div class="constrain">
			<div class="h-grid">
				<p>Subtotal</p>
				<p>$26.97</p>
			</div>
			<div class="h-grid">
				<p>Shipping Fee</p>
				<p>$7.00</p>
			</div>
			<div class="totals">
				<h4>Total</h4>
				<h4>$33.97</h4>
			</div>
		</div>
	</section>

	<!-- Flickity Slider of Similar products -->
	<section id="similar-products">
		<div class="section-title constrain">
			<h4>Similar Products</h4>
		</div>

		<div class="products"
			data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "10", "initialIndex": 2 }'>
			<!-- 
				There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon on top of the product image.
			-->
			<div class="product bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/24.jpg" height="120px" alt="Fried Noodles and Chicken">
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

			<div class="product">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/25.jpg" height="120px" alt="Fried Noodles and Chicken">
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

			<div class="product bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/26.jpg" height="120px" alt="Fried Noodles and Chicken">
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

			<div class="product">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/27.jpg" height="120px" alt="Fried Noodles and Chicken">
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

			<div class="product bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/28.jpg" height="120px" alt="Fried Noodles and Chicken">
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

			<div class="product">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/29.jpg" height="120px" alt="Fried Noodles and Chicken">
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

	<section id="big-cart-btn">
		<!-- This button submits this form. -->
		<a href="confirm-order" class="big-cart-btn btn btn-primary constrain">
			Checkout
		</a>
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

			<a href="cart" style="padding: 15px;" class="link link-secondary active">
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