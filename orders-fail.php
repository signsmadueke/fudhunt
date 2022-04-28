<?php 	
require_once 'include/header.php';
 ?>

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
			<button class="tab" onclick="openTab(event, 'completed')"><span>Completed</span></button>
		</div>
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
	<section id="ongoing" class="tab-content active">
		<div class="orders constrain">


					<?php 
                        $response = fetch_pending_order($user_id);
                        $i = 1;
                        if ($response) {
                            foreach ($response as $row) {
                             extract($row);
                         ?>  


			<a href="track-order" class="order">
				<div class="image">
					<!-- <img src="assets/images/restaurants/kichi.png" height="95px" alt="kichi"> -->
				</div>
				<div class="details">
					<h5 class="name"><?php echo $products; ?></h5>
					<p class="id">
						<span>ID:</span> 43e<?php echo $order_id; ?>	
					</p>
					<p class="items">
						<!-- 1 Item -->
					</p>
					<!-- This is the status of the order, The statuses have different classes to change the colors -->
					<p class="status waiting"><?php echo $delivery_status; ?></p>
				</div>
			</a>

		<?php }} ?>

		</div>



		<!-- This is the empty state of the Ongoing tab -->
		<div class="empty-state constrain">
			<img src="assets/images/others/idle-rider.png" height="300px" alt="Idle Rider">

			<div class="text">
				<h2>No Ongoing Orders yet!</h2>
				<p>You can go to Home to add products.</p>
			</div>

			<a href="index" class="btn btn-primary">Go Home</a>
		</div>
	</section>

	<!-- Tab content -->
	<!-- This is the Completed tab -->
	<section id="completed" class="tab-content">
		<div class="orders constrain">

							<?php 
                        $response = fetch_order($user_id);
                        $i = 1;
                        if ($response) {
                            foreach ($response as $row) {
                             extract($row);
                         ?>   

			<a href="track-order" class="order">
				<div class="image">
					<!-- <img src="assets/images/restaurants/kichi.png" height="95px" alt=""> -->
				</div>
				<div class="details">
					<h5 class="name"><?php echo $products; ?></h5>
					<p class="items">
						<!-- 6 Items -->
						<b>Delivery Status: </b> <?php echo $delivery_status; ?>
					</p>
					<p class="date"><?php echo $delivery_time; ?></p>
				</div>
			</a>

				<?php }} ?>
		</div>

		<div class="empty-state constrain">
			<img src="assets/images/others/idle-rider.png" height="300px" alt="Idle Rider">

			<div class="text">
				<h2>No Completed Orders yet!</h2>
				<p>You can go to Home to add products.</p>
			</div>

			<a href="index" class="btn btn-primary">Go Home</a>
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