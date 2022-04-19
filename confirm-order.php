<?php
require 'include/function4user.php';
if (isset($_SESSION['user_id'])) {
	 $user_id = $_SESSION['user_id'];  
  $result = fetch_user($user_id);
   extract($result);

 // var_dump($result); 

}




?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Confirm Order">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">
	<link rel="stylesheet" href="assets/css/fullscreen.css">

	<title>Confirm Order</title>
</head>

<body id="confirm-order-page" class="container">
	<!-- Wrapping everything in a form so it can be submitted to the database. -->
	<form action="" method="POST">
		<section id="header" class="constrain header-white">
			<a href="edit-profile" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>

			<div class="text">
				<h1 class="title">Confirm Order</h1>

				<p class="id">
					<span>ID:</span> 43e2 116H
				</p>
			</div>
		</section>

		<!-- Delivery address -->
		<section id="delivery-address" class="constrain">
			<div class="header">
				<h4>Deliver to</h4>
				<a href="add-new-address" class="link link-primary">Add new address</a>
			</div>

			<div class="address">
				<div class="map">
					<img src="assets/images/others/address-map.png" height="100px" alt="Map">
				</div>
				<div class="details">
					<h5 class="location-address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="9px" alt="Store">
						<span><?php $delivery_address =  $address.", ".$city.", ".$state; echo $delivery_address; ?></span>
					</h5>
					<p class="name">
						<img class="svg" src="assets/images/icons/person.svg" height="9px" alt="Store">
						<span>Joy Obianaba</span>
					</p>
					<p class="phone">
						<img class="svg" src="assets/images/icons/telephone.svg" height="9px" alt="Store">
						<span>+234 (803) 878 2933</span>
					</p>
				</div>
			</div>
		</section>

		<!-- Details of the delivery. -->
		<section id="delivery-details">
			<div class="heading constrain">
				<div class="v-grid">
					<h5>Delivery Time</h5>
					<div class="h-grid">
						<p>10:11 AM</p>
						<p>Oct 6, 2020</p>
					</div>
				</div>
			</div>

		<div class="cart-items constrain">
			<?php 
		$cart = $_SESSION['cart'];
		$prize = [];
		$products = [];
		foreach ($cart as $key ) {
	$cartsql = "SELECT * FROM food WHERE food_id = $key";
						$cartres = mysqli_query($link, $cartsql);
						$cart = mysqli_fetch_assoc($cartres);
						extract($cart);
						$food_prize = floatval($food_prize);
						array_push($prize, $food_prize);
						array_push($products, $food_name);

		
		
		
		//var_dump($prod);

		// var_dump($_SESSION['cart']);
		 ?>
		 <div class="cart-item">
					<div class="image">
						<img src="admin/<?php echo $food_pix; ?>" height="100px" alt="Restaurant Image">
					</div>
					<div class="details">
						<h5 class="name"><?php echo $food_name; ?></h5>
						<p class="product">$<?php $fp = number_format($food_prize); echo $fp; ?>.00</p>
					</div>
				</div>
			<?php } 
			$p = array_sum($prize);
			


			?>

				<!-- <div class="cart-item">
					<div class="image">
						<img src="assets/images/products/22.jpg" height="100px" alt="Restaurant Image">
					</div>
					<div class="details">
						<h5 class="name">Dungeness Crab Arancini</h4>
						<p class="product">$8.99</p>
					</div>
				</div> -->

				<!-- <div class="cart-item">
					<div class="image">
						<img src="assets/images/products/23.jpg" height="100px" alt="Restaurant Image">
					</div>
					<div class="details">
						<h5 class="name">Octopus</h5>
						<p class="product">$9.99</p>
					</div>
				</div> -->

			</div>
		</section>
		
		<section id="cart-totals" class="constrain">
			<div class="h-grid">
				<p>Subtotal</p>
				<p>$<?php $pf = number_format($p);  echo $pf; ?>.00</p>
			</div>
			<div class="h-grid">
				<p>Shipping Fee</p>
				<p>$7.00</p>
			</div>
			<div class="totals">
				<h4>Total</h4>
				<h4>$<?php $pt = $p + 7; $pt = number_format($pt); echo $pt;  ?></h4>
			</div>
		</section>

		<!-- Flickity Slider of Similar products -->
		<section id="similar-products" class="constrain">
			<div class="section-title">
				<h4>Similar Products</h4>
			</div>

			<div class="products constrain"
					data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "0", "LazyLoad": false }'>

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

		<!-- Leaving a Note -->
		<section id="note">
			<div class="title constrain">
				<h4>Note</h4>
			</div>

			<div class="constrain">
				<textarea name="delivery_note" placeholder="Leave a note" id="note"></textarea>
			</div>
		</section>

		<section id="payment-method" class="constrain">
			<div class="header">
				<h4>Payment Method</h4>
				<a href="payment-methods" class="link link-primary">Add payment method</a>
			</div>

			<div class="cards">
				<div class="card">
					<input name="card" id="card-1" type="radio" checked>
					<label for="card-1">
						<div class="card-image visa">
							<img class="svg" width="40px" alt="Card Image">
						</div>
						<h5 class="number">**** **** *153</h5>
						<img src="assets/images/payments/card-check.svg" class="checkmark" width="40px">
					</label>
				</div>

				<div class="card">
					<input name="card" id="card-2" type="radio">
					<label for="card-2">
						<div class="card-image mastercard">
							<img class="svg" width="40px" alt="Card Image">
						</div>
						<h5 class="number">**** **** *153</h5>
						<img src="assets/images/payments/card-check.svg" class="checkmark" width="40px">
					</label>
				</div>

				<div class="card">
					<input name="card" id="card-3" type="radio">
					<label for="card-3">
						<div class="card-image visa">
							<img class="svg" width="40px" alt="Card Image">
						</div>
						<h5 class="number">**** **** *153</h5>
						<img src="assets/images/payments/card-check.svg" class="checkmark" width="40px">
					</label>
				</div>

				<div class="card">
					<input name="card" id="card-4" type="radio">
					<label for="card-4">
						<div class="card-image mastercard">
							<img class="svg" width="40px" alt="Card Image">
						</div>
						<h5 class="number">**** **** *153</h5>
						<img src="assets/images/payments/card-check.svg" class="checkmark" width="40px">
					</label>
				</div>
			</div>
		</section>

		<div class="submit constrain">

			<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
			<input type="hidden" name="total_prize" value="<?php echo $p; ?>">
			<input type="hidden" name="delivery_address" value="<?php echo $delivery_address; ?>">
			<input type="hidden" name="delivery_note" value="<?php echo $delivery_note; ?>">

			<button type="submit" name="submit" class="big-cart-btn btn btn-primary constrain">
				Pay $<?php $pt = $p + 7; $pt = number_format($pt); echo $pt;  ?>.00
			</button>
		</div>
	</form>

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


<?php 	
if (isset($_POST['submit'])) {
	$products = implode( ",", $products);
	$result = checkout($_POST, $products);
	
	// var_dump($result);
}
 ?>