<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Payment Methods">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Payment Methods</title>
</head>

<body id="payment-methods-page" class="container with-bottom-menu bg-offwhite">
	<section id="header" class="header-primary">
		<div class="header-actions constrain">
			<a href="profile" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>
		</div>

		<h1 class="constrain">Payment Methods</h1>
	</section>

	<section id="payment-methods">
		<form action="" class="cards constrain">
			<!-- If the Visa Card option is selected, add a ".visa" class to the div below.
				If it's a Mastercard, add a ".mastercard" class instead.
				The classes are in charge of switching the image. (There's no "src" attribute. The classes are changing the source from the CSS.)  -->
			<div class="card visa">
				<div class="image">
					<!-- This is the card image that changes when the class changes. -->
					<img class="svg" width="40px" alt="Card Image">
				</div>
				<div class="details">
					<h5 class="number">**** **** *325</h5>
					<p class="date">Jun 10, 2020</p>
				</div>
				<!-- This is the radio button -->
				<label class="radio">
					<input name="card" id="mastercard" type="radio" checked>
					<span class="check"></span>
				</label>
			</div>

			<div class="card mastercard">
				<div class="image">
					<img class="svg" width="40px" alt="Card Image">
				</div>
				<div class="details">
					<h5 class="number">**** **** *153</h5>
					<p class="date">Jun 10, 2020</p>
				</div>
				<label class="radio">
					<input name="card" id="mastercard" type="radio">
					<span class="check"></span>
				</label>
			</div>

			<div class="card visa">
				<div class="image">
					<img class="svg" width="40px" alt="Card Image">
				</div>
				<div class="details">
					<h5 class="number">**** **** *894</h5>
					<p class="date">Jun 10, 2020</p>
				</div>
				<label class="radio">
					<input name="card" id="mastercard" type="radio">
					<span class="check"></span>
				</label>
			</div>
		</form>
	</section>

	<section id="new-payment-method">

		<h2 class="constrain">Add Payment Methods</h2>
		
		<form action="" id="credit-card-info" class="constrain">
			<div class="form-row">
				<!-- If the Visa Card option is selected, add a ".visa" class to the div below.
				If it's a Mastercard, add a ".mastercard" class instead.
				The classes are in charge of switching the image. (There's no "src" attribute. The classes are changing the source from the CSS.)  -->
				<div class="select visa">
					<div class="image">
						<!-- This is the card image that changes when the class changes. -->
						<img class="svg" height="15px">
					</div>
					<select name="card-type" id="card-type">
						<option value="visa">Visa Card</option>
						<option value="mastercard">Mastercard Card</option>
					</select>
					<div class="chevron-icon">
						<img class="svg" src="assets/images/icons/chevron-down.svg" height="7px" alt="Select">
					</div>
				</div>
			</div>

			<div class="form-row">
				<div>
					<input class="card-number" maxlength="19" name="credit-number" pattern="\d*" placeholder="Card Number" type="tel" />
				</div>
			</div>

			<div class="form-row">
				<div>
					<input class="card-expiry-date" maxlength="7" name="credit-expires" pattern="\d*" placeholder="MM / YY" type="tel" />
				</div>

				<div>
					<input class="cvv" maxlength="4" name="credit-cvc" pattern="\d*" placeholder="CVV" type="tel" />
				</div>
			</div>

			<div class="form-row">
				<button type="submit" class="btn btn-primary" name="complete">Complete</button>
			</div>
		</form>
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

		$(document).ready(function () {

			// Set up formatting for Credit Card fields
			$('#credit-card-info .card-number').formatCardNumber();
			$('#credit-card-info .card-expiry-date').formatCardExpiry();
			$('#credit-card-info .cvv').formatCardCVC();

			$('body.with-bottom-menu').css({
				'padding-bottom': $('#bottom-menu').height() + "px"

			});
		});
	</script>
</body>

</html>