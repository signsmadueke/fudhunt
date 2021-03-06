<?php
require 'include/function4user.php';
if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
	$result = fetch_user($user_id);
	extract($result);
}


if (isset($_GET['restaurant_id'])) {
	$restaurant_id = $_GET['restaurant_id'];
	$response = fetch_restaurant_food($restaurant_id);
	$nc = count($response);

	$cn = fetch_single_restaurant($restaurant_id);
	extract($cn);
} else {
	header('Location:' . $_SERVER['HTTP_REFERER']);
	exit();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Business Details">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">
	<link rel="stylesheet" href="assets/css/fullscreen.css">

	<title>Business Details</title>
</head>

<!-- 
	This page is a bit complex, I have three pages in one.
	They're fixed into tabs and they become active when the tab's button is clicked.

	There's a "".bookmarked" class on the <body> tag, it helps to show that the restaurant is bookmarked by the user. Once the .bookmarked tag is added as a class it styles the bookmark icon in the header.
 -->

<body id="business-details-page" class="bg-offwhite container with-bottom-menu bookmarked">

	<!-- So this <section id="header"> has a backgroud image, I don't know if it's meant to be dynamic but I've left a link to the image in the inline style of the section.  -->
	<section id="header" class="header-transparent-image header-with-tab" style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(0deg, rgba(34, 43, 69, 0.9), rgba(34, 43, 69, 0.9)), url(<?php echo $restaurant_pix; ?>);">


		<div class="header-actions constrain">
			<a href="#" onclick="history.back()" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>
			<!-- Bookmark icon -->
			<button type="button" class="btn bookmark">
				<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
			</button>
		</div>

		<!-- This shows the name and address of the restaurant -->
		<div class="text constrain">
			<h1 class="name"><?php echo $restaurant_name; ?></h1>
			<p class="address">
				<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
				<span><?php echo $restaurant_address; ?></span>
			</p>
			<p class="reviews">
				<img class="svg icon" alt="" src="assets/images/icons/star.svg">
				<b><?php echo (rand(35, 50) / 10); ?></b>
				<span>(<?php echo (rand(100, 1000)); ?> Reviews)</span>
			</p>
		</div>

		<!-- 
			This is the tab buttons.
			When you click the buttons they activate the selected tab, clicking it also adds a ".active" class to both the button of the tab and the tab content.
			I have already implemented it using javascript.
		-->
		<div id="tabs" class="constrain">
			<button class="tab active" onclick="openTab(event, 'products')"><span>Menu</span></button>
			<button class="tab" onclick="openTab(event, 'reviews')"><span>Reviews</span></button>
			<button class="tab" onclick="openTab(event, 'information')"><span>Information</span></button>
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

	<!-- Tab content -->
	<!-- This is the Products tab -->
	<section id="products" class="tab-content active">
		<div class="v-grid">
			<div class="section-title with-link constrain">
				<h4>Menu</h4>
			</div>

			<!-- This is a flickity slider of products by this restaurant -->
			<div class="products constrain" data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "0", "LazyLoad": false }'>

				<!-- 
					There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon on top of the product image.
				-->

				<?php
				$i = 1;
				if ($response) {
					foreach ($response as $row) {
						extract($row)
				?>

						<div class="product vertical bookmarked">
							<div class="details">
								<div class="image">
									<img src="<?php echo $food_pix; ?>" height="120px" alt="<?php echo $food_name; ?>">
									<button class="btn bookmark">
										<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
									</button>
								</div>
								<div class="text">
									<p class="name"><?php echo $food_name; ?></p>
									<p>
										<span class="price">$<?php echo $food_prize; ?></span>
									</p>
									<div class="quantity">
										<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
										<span class="value">0</span>
										<button onclick="window.location.href='addcart.php?food_id=<?php echo $food_id; ?>'" type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
									</div>
									</p>
								</div>
							</div>
						</div>

				<?php }
				} ?>
			</div>
		</div>

		<div id="product-categories">
			<div class="section-title constrain">
				<h4>Bestsellers</h4>
			</div>

			<!-- 
				There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon.
			-->
			<div class="v-grid">
				<?php
				$i = 1;
				if ($response) {
					foreach ($response as $row) {
						extract($row)
				?>
						<div class="product constrain horizontal">
							<a href="#" class="image">
								<img src="<?php echo $food_pix; ?>" height="120px" alt="#">
							</a>

							<div class="details">

								<a href="#" class="name">
									<h5><?php echo $food_name; ?></h5>
								</a>

								<button class="btn bookmark">
									<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
								</button>

								<h5 class="price">$<?php echo $food_prize; ?></h5>
								<div class="quantity">
									<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
									<span class="value">0</span>
									<a href="addcart.php?food_id=<?php echo $food_id; ?>"><button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
									</a>
								</div>

							</div>
						</div>
				<?php }
				} ?>
			</div>
		</div>
		</div>
	</section>

	<!-- Tab content -->
	<!-- This is the Reviews tab -->
	<section id="reviews" class="tab-content constrain">

		<form action="business-details" class="rate-restaurant">
			<div class="text">
				<h4>Rate this restaurant</h4>
				<p>Your feedback will help us improve customer's experience better.</p>
			</div>
			<div class="rating-stars">
				<label>
					<input id="rating-radio" type="radio" name="stars" value="1" />
					<span class="icon">???</span>
				</label>
				<label>
					<input id="rating-radio" type="radio" name="stars" value="2" />
					<span class="icon">???</span>
					<span class="icon">???</span>
				</label>
				<label>
					<input id="rating-radio" type="radio" name="stars" value="3" />
					<span class="icon">???</span>
					<span class="icon">???</span>
					<span class="icon">???</span>
				</label>
				<label>
					<input id="rating-radio" type="radio" name="stars" value="4" />
					<span class="icon">???</span>
					<span class="icon">???</span>
					<span class="icon">???</span>
					<span class="icon">???</span>
				</label>
				<label>
					<input id="rating-radio" type="radio" name="stars" value="5" />
					<span class="icon">???</span>
					<span class="icon">???</span>
					<span class="icon">???</span>
					<span class="icon">???</span>
					<span class="icon">???</span>
				</label>
			</div>
			<div class="form-row">
				<div class="v-grid">
					<input type="text" name="name" id="name" required>
					<label for="name">Name</label>
				</div>
			</div>

			<div class="form-row">
				<div class="v-grid">
					<textarea name="note" placeholder="Write a comment" id="note" required></textarea>
					<label for="note">Write a comment</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit Review</button>
		</form>

		<!-- Ratings -->
		<div class="comments">
			<div class="section-title">
				<h4>Reviews
					<!-- <span>(4)</span> -->
				</h4>
			</div>

			<!-- This is a rating with everything: star rating, comment, and media. -->
			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px">
				</div>
				<div class="details">
					<h5 class="name">Alice S.</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: <?php echo (rand(30, 50) / 10); ?>;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">Hands down the best brunch spot in Cole Valley! The first time I came here was actually because the wait at Zazie was too long (~2hrs), while there was no wait here. I''m just so glad I gave this place a shot because I enjoyed the food at Padrecito so much more.</p>
				</div>
			</div>

			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px">
				</div>
				<div class="details">
					<h5 class="name">Kihanna R.</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: <?php echo (rand(30, 50) / 10); ?>;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">Good vibes here! The food was delicious, but not everything was to amazing. Top favorite things here was the guacamole, pork belly tacos, ceviche and the quesabirria, they all had amazing flavor and would definitely go back for these!</p>
				</div>
			</div>

			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px">
				</div>
				<div class="details">
					<h5 class="name">Aubriana M.</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: <?php echo (rand(30, 50) / 10); ?>;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">Love Padrecito - have been here many times for brunch and dinner. <br>Food: The food is amazing I''ve had almost everything on the menu and nothing has disappointed so far. I went for my birthday recently and had the fish tacos - fish was nice and crispy on the outside and soft on the inside. The ceviches are AMAZING and quessabirria is sooo savory, hearty, and flavorful.</p>
				</div>
			</div>

			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px">
				</div>
				<div class="details">
					<h5 class="name">Ankita R.</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: <?php echo (rand(30, 50) / 10); ?>;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">The coffee was quite nice and the food was very tasty with generous portion sizes. Service was very good and our hostess checked on us from time to time to make sure we had everything we need. Great place for brunch!</p>
				</div>
			</div>

			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px">
				</div>
				<div class="details">
					<h5 class="name">Shirin B.</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: <?php echo (rand(30, 50) / 10); ?>;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">Came to the Haight area for brunch but all the restaurants around us were packed and seem to had long wait times. Padrecito came through with the last minute seating and delicious brunch options for all of us.</p>
				</div>
			</div>

			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px">
				</div>
				<div class="details">
					<h5 class="name">theresa k.</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: <?php echo (rand(30, 50) / 10); ?>;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">This restaurant was doing brisk business on an early Wednesday evening. We ordered the Braised Pork Belly Tacos which were very flavorful and beautifully presented;<br>the reliable guacamole w/ chips &amp; salsa; Enchiladas De Res; <br>and the Arctic Char Tacos.</p>
				</div>
			</div>

			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px">
				</div>
				<div class="details">
					<h5 class="name">Jessica T.</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: <?php echo (rand(30, 50) / 10); ?>;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">I haven''t been to Padrecito in awhile, but it''s one of my favorite brunch spots.</p>
				</div>
			</div>

			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px">
				</div>
				<div class="details">
					<h5 class="name">Nancy Z.</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: <?php echo (rand(30, 50) / 10); ?>;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">I adore their guacamole. <br><br>It is easily one of my favorite foods.</p>
				</div>
			</div>

			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px">
				</div>
				<div class="details">
					<h5 class="name">Fallon F.</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: <?php echo (rand(30, 50) / 10); ?>;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">Solid neighborhood Mexican spot with great drink options. The place is spacious, with a big bar area- so great for groups as well.</p>
				</div>
			</div>

			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px">
				</div>
				<div class="details">
					<h5 class="name">Cedric C.</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: <?php echo (rand(30, 50) / 10); ?>;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">So good. Was at a place on haight where we waited in line to be seated for around 10 minutes and then were handed menus and ignored for 10 minutes- hopped on Yelp and found padrecito and decided to walk here instead. So worth! We were seated and had drinks and order taken immediately. </p>
				</div>
			</div>
		</div>
	</section>

	<!-- Tab content -->
	<section id="information" class="tab-content constrain">
		<!-- <div class="v-grid constrain">
			<h5 class="title">Informations</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quos, unde molestias laudantium harum
				recusandae asperiores id temporibus sunt earum ipsum cupiditate hic, dolore tempore amet eveniet sit vel
				nam!</p>
		</div> -->

		<div class="v-grid">
			<h4 class="title">Location</h4>
			<!-- The image in this map div should be replced with an actual map.  -->
			<div class="map">
				<!-- <img src="assets/images/others/map-address.png" height="200px" alt="Map"> -->
				<div class="mapouter">
					<div class="gmap_canvas"><iframe width="100%" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $restaurant_name; ?> <?php echo $restaurant_address; ?>&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br>
						<style>
							.mapouter {
								position: relative;
								text-align: right;
								height: 400px;
								width: 100%;
							}

							.gmap_canvas {
								overflow: hidden;
								background: none !important;
								height: 400px;
								width: 100%;
							}
						</style>
					</div>
				</div>
			</div>
		</div>

		<div class="v-grid">
			<h4 class="title">Hours</h4>
			<p>Mon: Closed</p>
			<p>Tue: 11:00 AM - 8:30 PM</p>
			<p>Wed: 11:00 AM - 8:30 PM</p>
			<p>Thu: 11:00 AM - 8:30 PM</p>
			<p>Fri: 11:00 AM - 9:00 PM</p>
			<p>Sat: 11:00 AM - 9:00 PM</p>
			<p>Sun: 11:00 AM - 8:30 PM</p>
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