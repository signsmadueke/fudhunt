<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Tracking on Map">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Tracking on Map</title>
</head>

<body id="track-order-page" class="container bg-offwhite with-bottom-menu">
	<section id="header" class="constrain header-white">
		<div class="navigation">
            <a href="orders" class="back">
                <img class="svg" src="assets/images/icons/arrow-left.svg" height="5px" alt="Go back">
            </a>
        </div>	
		<div class="text">
			<h1 class="name">Track Order</h1>
		</div>
	</section>

	<section id="track-order" class="">
		<!-- This section has 2 screens. The second one comes up immediately the order completes so the user rates the driver.
		The class responsible for the switching is ".rate" You can switch by adding a ".rate" class to the .content section. It'll look like this: "content rate" -->
		<form action="" class="content">
			<div class="tracking-details">
				<h5 class="title constrain">Your order will arrive in 5:35</h5>

				<div class="order constrain">
					<div class="image">
						<img src="assets/images/restaurants/kfc.png" height="95px" alt="kichi">
					</div>
					<div class="details">
						<a href="#" class="name">
							<h5>Kentucky Fried Chicken</h5>
						</a>
						<p class="id">
							<span>ID:</span> 43e2116H
						</p>
						<p class="items">
							4 Item
						</p>
						<p class="status waiting">Waiting</p>
					</div>
				</div>

				<div class="rider constrain">
					<div class="image">
						<img src="assets/images/humans/rider.png" height="50px" alt="Rider's Picture">
					</div>
					<div class="details">
						<a href="#" class="name">
							<h5>Devin Aronu</h5>
						</a>
						<p class="reviews">
							<img class="svg icon" alt="" src="assets/images/icons/star.svg">
							4.5
							<span>(125)</span>
						</p>
						<div class="contact">
							<a href="sms:+23480337829332" class="sms btn">
								<img class="svg icon" alt="" src="assets/images/icons/message.svg">
							</a>

							<a href="tel:+23480337829332" class="call btn">
								<img class="svg icon" alt="" src="assets/images/icons/call.svg">
							</a>
						</div>
					</div>
				</div>

				<div class="trip constrain">
					<h5 class="title">TRIP</h5>
					<div class="order-timeline">
						<div class="timeline active">
							<div class="icon"></div>
							<h5>Order confirmation</h5>
							<h5 class="time">9:15 AM</h5>
						</div>

						<div class="timeline active">
							<div class="icon"></div>
							<h5>Rider at Restaurant</h5>
							<h5 class="time">10:05 AM</h5>
						</div>

						<div class="timeline inactive">
							<div class="icon"></div>
							<h5>Shipping</h5>
							<h5 class="time">12:35 PM</h5>
						</div>

						<div class="timeline end">
							<div class="icon"></div>
							<h5>Delivery to your address</h5>
							<h5 class="time">1:25 PM</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="rate-rider constrain">
				<div class="text">
					<h4>Rate your rider</h4>
					<p>Your feedback will help us improve shipping experience better.</p>
				</div>
				<div class="rating-stars">
					<label>
						<input id="rating-radio" type="radio" name="stars" value="1" />
						<span class="icon">★</span>
					</label>
					<label>
						<input id="rating-radio" type="radio" name="stars" value="2" />
						<span class="icon">★</span>
						<span class="icon">★</span>
					</label>
					<label>
						<input id="rating-radio" type="radio" name="stars" value="3" />
						<span class="icon">★</span>
						<span class="icon">★</span>
						<span class="icon">★</span>
					</label>
					<label>
						<input id="rating-radio" type="radio" name="stars" value="4" />
						<span class="icon">★</span>
						<span class="icon">★</span>
						<span class="icon">★</span>
						<span class="icon">★</span>
					</label>
					<label>
						<input id="rating-radio" type="radio" name="stars" value="5" />
						<span class="icon">★</span>
						<span class="icon">★</span>
						<span class="icon">★</span>
						<span class="icon">★</span>
						<span class="icon">★</span>
					</label>
				</div>
				<div class="compliments">
					<div class="checkbox">
						<input id="enthusiastic" type="checkbox" checked>
						<span class="check"></span>
						<label for="enthusiastic">Enthusiastic</label>
					</div>
					<div class="checkbox">
						<input id="fast" type="checkbox">
						<span class="check"></span>
						<label for="fast">Fast</label>
					</div>
					<div class="checkbox">
						<input id="friendly" type="checkbox" checked>
						<span class="check"></span>
						<label for="friendly">Friendly</label>
					</div>
				</div>
				<textarea name="note" placeholder="Do you want to say something about Devin?" id="note"></textarea>
				<button type="submit" class="btn btn-primary" name="add-address">Complete</button>
			</div>

		</form>
		<!-- <div class="popup-overlay"></div> -->
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
		var modal = document.getElementById("track-order-popup");
		var btn = document.getElementsByClassName("add-to-cart");
		var span = document.getElementsByClassName("close")[0];

		$(".add-to-cart").click(function () {
			var $modal = $('#track-order-popup');
			$modal.addClass('active');
		});

		$(".close-popup").click(function () {
			var $modal = $('#track-order-popup');
			$modal.toggleClass('active');
		});

		window.onclick = function (event) {
			if (event.target == modal) {
				var $modal = $('#track-order-popup');
				$modal.removeClass('active');
			}
		
			var div = $(".racing-stars");
			var radiosBtns = div.find("input[type='radio']");
			if ($radiosBtns.is(':checked')) {
				var $popupcontent = $('.popup-content');
				$popupcontent.addClass('rated');
			}
		}

	</script>
</body>

</html>