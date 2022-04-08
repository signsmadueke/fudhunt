<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Fudhunt">
	<meta name="description" content="Rating">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Rating</title>
</head>

<body id="rating-page" class="container bg-offwhite">
<section id="header" class="header-primary">
		<div class="header-actions constrain">
			<a href="index" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>
		</div>

		<h1 class="constrain">Rating</h1>
	</section>

	<section id="rating">
		<form action="index">
			<div class="rating restaurant constrain">
				<div class="rating-info">
					<!-- 
						There's a ".bookmarked" class on the restaurants that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon.
					-->
					<div class="restaurant bookmarked">
						<a href="#" class="image">
							<img src="assets/images/restaurants/lion-square.png" height="100px" alt="Restaurant Image">
						</a>
						<div class="details">
							<a href="#">
								<h4 class="name">Lion Square</h4>
							</a>
							<!-- Bookmark icon -->
							<button class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
							<p class="address">
								<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
								<span>76A Gwarimpa Estate, Abuja</span>
							</p>
						</div>
					</div>

					<div class="rate-restaurant">
						<div class="text">
							<h4>Rate this restaurant</h4>
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
						<textarea name="note" placeholder="Write a comment" id="note"></textarea>
					</div>
				</div>
			</div>

			<div class="submit constrain">
				<button type="submit" class="btn btn-primary">Submit Review</button>
			</div>
		</form>
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