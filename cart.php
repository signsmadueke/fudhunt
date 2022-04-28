<?php
require 'include/function4user.php';
// if (isset($_SESSION['user_id'])) {
// 	 $user_id = $_SESSION['user_id'];  
//   $result = fetch_user($user_id);
//    extract($result);

//  // var_dump($result); 

// }


?>
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

		<?php
		$cart = $_SESSION['cart'];
		$prize = [];
		foreach ($cart as $key) {
			$cartsql = "SELECT * FROM food WHERE food_id = $key";
			$cartres = mysqli_query($link, $cartsql);
			$cart = mysqli_fetch_assoc($cartres);
			extract($cart);
			$food_prize = floatval($food_prize);
			array_push($prize, $food_prize);
			// var_dump($cart);

			// var_dump($_SESSION['cart']);
		?>

			<div class="cart-item constrain">
				<a href="#" class="image">
					<img src="admin/<?php echo $food_pix; ?>" height="120px" alt="">
				</a>
				<div class="details">
					<a href="#" class="name"><?php echo $food_name; ?></a>
					<h5 class="price">$<?php echo $food_prize; ?></h5>
					<div class="quantity">
						<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
						<span class="value">0</span>
						<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
					</div>
				</div>
			</div>

		<?php }

		$p = array_sum($prize);
		// var_dump($prize);
		//var_dump($p);
		?>

		<!-- 		<div class="cart-item constrain">
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
		</div> -->

		<!-- <div class="cart-item constrain">
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
		</div> -->
	</section>

	<section id="cart-totals">
		<div class="constrain">
			<div class="h-grid">
				<p>Subtotal</p>
				<p>$<?php $pf = $p;
					echo $pf; ?></p>
			</div>
			<div class="h-grid">
				<p>Shipping Fee</p>
				<p>$7.99 (Flat Fee)</p>
			</div>
			<div class="totals">
				<h4>Total</h4>
				<h4>$<?php $pt = $p + 7.99;
						$pt = $pt;
						echo $pt;  ?></h4>
			</div>
		</div>
	</section>

	<!-- Flickity Slider of Similar products -->
	<section id="similar-products" class="constrain">
		<div class="section-title">
			<h4>Similar Products</h4>
		</div>

		<div class="products constrain" data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "0", "LazyLoad": false }'>

			<!-- 
					There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon on top of the product image.
				-->
			<div class="product vertical bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/1.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Hot Salami Pizza</a>
						<p>
							<span class="price">$2.99</span>
						</p>
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>
						</p>
					</div>
				</div>
			</div>

			<div class="product vertical">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/2.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Dungeness Crab Arancini</a>
						<p>
							<span class="price">$3.99</span>
						</p>
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>
					</div>
				</div>
			</div>

			<div class="product vertical bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/3.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Octopus</a>
						<p>
							<span class="price">$4.99</span>
						</p>
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>
					</div>
				</div>
			</div>

			<div class="product vertical bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/4.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Roasted Beet Salad</a>
						<p>
							<span class="price">$6.99</span>
						</p>
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>
					</div>
				</div>
			</div>

			<div class="product vertical">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/5.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Fried Cauliflower</a>
						<p>
							<span class="price">$3.99</span>
						</p>
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>
					</div>
				</div>
			</div>

			<div class="product vertical">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/6.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Carbonara Pizza</a>
						<p>
							<span class="price">$5.99</span>
						</p>
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>
					</div>
				</div>
			</div>

			<div class="product vertical bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/1.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Margherita Pizza</a>
						<p>
							<span class="price">$3.99</span>
						</p>
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="big-cart-btn">
		<!-- This button submits this form. -->
		<?php
		if (isset($_SESSION['user_id'])) {
		?>
			<a href="confirm-order.php" class="big-cart-btn btn btn-primary constrain">
				Checkout
			</a>
		<?php } ?>


		<?php
		if (!isset($_SESSION['user_id'])) {
		?>
			<a href="#" onclick="alert('Please Login to continue checkout'); window.location='login.php'" class="big-cart-btn btn btn-primary constrain">
				Checkout
			</a>

		<?php } ?>



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

</body>

</html>