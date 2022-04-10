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
	<section id="header" class="header-transparent-image header-with-tab" style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(0deg, rgba(34, 43, 69, 0.9), rgba(34, 43, 69, 0.9)), url(assets/images/products/1.jpg);">

		
		<div class="header-actions constrain">
			<a href="index" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>
			<!-- Bookmark icon -->
			<button type="button" class="btn bookmark">
				<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
			</button>
		</div>

		<!-- This shows the name and address of the restaurant -->
		<div class="text constrain">
			<h1 class="name">Lion Square</h1>
			<p class="address">
				<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
				<span>76A Gwarimpa Estate, Abuja</span>
			</p>
			<p class="reviews">
				<img class="svg icon" alt="" src="assets/images/icons/star.svg">
				<b>4.5</b>
				<span>(1256 Reviews)</span>
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
			<div class="products constrain"
				data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "0", "LazyLoad": false }'>

				<!-- 
					There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon on top of the product image.
				-->
				<div class="product vertical bookmarked">
					<div class="details">
						<div class="image">
							<img src="assets/images/products/1.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
							<button class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</div>
						<div class="text">
							<p class="name">Hot Salami Pizza</p>
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
						<div class="image">
							<img src="assets/images/products/2.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
							<button class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</div>
						<div class="text">
							<p class="name">Dungeness Crab Arancini</p>
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
						<div class="image">
							<img src="assets/images/products/3.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
							<button class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</div>
						<div class="text">
							<p class="name">Octopus</p>
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
						<div class="image">
							<img src="assets/images/products/4.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
							<button class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</div>
						<div class="text">
							<p class="name">Roasted Beet Salad</p>
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
						<div class="image">
							<img src="assets/images/products/5.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
							<button class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</div>
						<div class="text">
							<p class="name">Fried Cauliflower</p>
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
						<div class="image">
							<img src="assets/images/products/6.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
							<button class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</div>
						<div class="text">
							<p class="name">Carbonara Pizza</p>
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
						<div class="image">
							<img src="assets/images/products/1.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
							<button class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</div>
						<div class="text">
							<p class="name">Margherita Pizza</p>
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
		</div>

		<div id="product-categories">
			<div class="section-title constrain">
				<h4>Juice <span>2 items</span></h4>
			</div>

			<!-- 
				There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon.
			-->
			<div class="v-grid">
				<div class="product horizontal constrain">
					<div class="image">
						<img src="assets/images/products/3.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
					</div>

					<div class="details">

						<div class="name">
							<h5>Margherita Burrata</h5>
						</div>

						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>

						<h5 class="price">$1,300</h5>
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>

					</div>
				</div>

				<div class="product horizontal constrain bookmarked">
					<div class="image">
						<img src="assets/images/products/4.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
					</div>

					<div class="details">

						<div class="name">
							<h5>Burrata Pizza</h5>
						</div>

						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>

						<h5 class="price">$1,300</h5>
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div id="product-categories">
			<div class="section-title constrain">
				<h4>Cofee <span>2 items</span></h4>
			</div>

			<div class="v-grid">
				<div class="product horizontal constrain bookmarked">
					<div class="image">
						<img src="assets/images/products/9.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
					</div>

					<div class="details">

						<div class="name">
							<h5>Squid Ink Risotto</h5>
						</div>

						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>

						<h5 class="price">$350</h5>
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>

					</div>
				</div>

				<div class="product horizontal constrain">
					<div class="image">
						<img src="assets/images/products/8.jpg" height="120px" alt="Fried Noodles and Chicken Wings">
					</div>

					<div class="details">

						<div class="name">
							<h5>Funghi Misti Pizza</h5>
						</div>

						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>

						<h5 class="price">$450</h5>
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
			<textarea name="note" placeholder="Write a comment" id="note"></textarea>
			<button type="submit" class="btn btn-primary">Submit Review</button>
		</form>

		<!-- Ratings -->
		<div class="comments">
			<div class="section-title">
				<h4>Reviews <span>(4)</span></h4>
			</div>

			<!-- This is a rating with just the star rating -->
			<div class="comment">
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Obiora Anyasi</h5>
					<div class="stars" style="--rating: 4;" aria-label="Rating of this product is 4 out of 5."></div>
					<p class="date">Yesterday</p>
				</div>
			</div>

			<!-- This is a rating with everything: star rating, comment, and media. -->
			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/1.png" height="40px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Dora Akunyili</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: 5;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">Matcha milk tea very yummy! I like it. Matcha milk tea very yummy! I like it. Matcha milk tea very yummy! I like it.</p>
					<!-- <div class="comment-media">
						<a href="#" class="media"><img src="assets/images/products/16.jpg" height="70px" alt="Review Media"></a>
						<a href="#" class="media"><img src="assets/images/products/15.jpg" height="70px" alt="Review Media"></a>
						<a href="#" class="media"><img src="assets/images/products/14.jpg" height="70px" alt="Review Media"></a>
					</div> -->
				</div>
			</div>

			<!-- This is a rating with just comments -->
			<div class="comment">
				<div class="user-image">
					<img src="assets/images/humans/rider.png" height="40px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Akin Alabi</h5>
					<div class="stars" style="--rating: 3.4;" aria-label="Rating of this product is 3.4 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">Matcha milk tea very yummy! I like it. I like it. Matcha milk tea very yummy! I like it.</p>
				</div>
			</div>

			<!-- This is a rating with just media -->
			<div class="comment">
				<div class="user-image">
					<img src="assets/images/humans/1.png" height="40px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Princess Adeleke</h5>
					<div class="stars" style="--rating: 4;" aria-label="Rating of this product is 4 out of 5."></div>
					<p class="date">Yesterday</p>
					<!-- <div class="comment-media">
						<a href="#" class="media"><img src="assets/images/products/16.jpg" height="70px" alt="Review Media"></a>
						<a href="#" class="media"><img src="assets/images/products/15.jpg" height="70px" alt="Review Media"></a>
						<a href="#" class="media"><img src="assets/images/products/14.jpg" height="70px" alt="Review Media"></a>
					</div> -->
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
				<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=138%20Church%20St%20San%20Francisco,%20CA%2094114&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:100%;}</style><a href="https://www.embedgooglemap.net">google custom map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div></div>
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