<?php
// require_once 'admin/config/db.php';

// if (isset($_POST['submit'])) {
//     $response = register($_POST);
//     if ($response === true) {
//         echo "<script>alert('Registration was successful! Redirecting to login...')</script>";
//         header("refresh:1; url=login");
//     } else if (is_array($response)) {
//         foreach ($response as $err) {
//             echo "<script>alert('$err')</script>";
//         }
//     } else {
//         echo "<script>alert('$response')</script>"; 
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="author" content="Fudhunt">
    <meta name="description" content="Create New Account">
    <meta name="robots" content="index, follow">

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/flickity.css">

    <title>Create New Account</title>
</head>

<body id="create-new-account-page" class="bg-dark container">

    <section id="header" class="header-with-tab">
        <div class="navigation constrain">
            <a href="login" class="back">
                <img class="svg" src="assets/images/icons/arrow-left.svg" height="5px" alt="Go back">
            </a>
        </div>
        <div class="text constrain">
            <h1 class="title">Create New Account</h1>
            <p>Create a Fudhunt account with your personal and location information.</p>
        </div>

        <div id="tabs" class="constrain">
			<button class="tab active" onclick="openTab(event, 'personal')"><span>Personal</span></button>
			<button class="tab" onclick="openTab(event, 'location')"><span>Location</span></button>
		</div>
    </section>

    
    <form action="" method="POST">


    <section id="personal" class="tab-content constrain active">
        <div class="form-row">
            <div>
                <input type="text" placeholder="Full name" name="name">
            </div>
        </div>

        <div class="form-row">
            <div>
                <input type="email" placeholder="Email" name="email">
            </div>
        </div>

        <div class="form-row">
            <div class="v-grid">
                <input type="password" placeholder="Password" name="password">
                <!-- This is the error text, it displays form errors. -->
                <p class="error">Password is incorrect.</p>
            </div>
        </div>

        <div class="form-row">
            <div>
                <input type="text" placeholder="Phone Number" name="phone">
            </div>
        </div>

        <div class="form-row">
            <div>
                <input type="add" placeholder="Your location" name="address">
            </div>
        </div>

        <div class="form-row">
            <div>
                <input type="date" placeholder="Date of Birth" name="dob">
            </div>
        </div>

        <div></div>

        <div class="form-row">
            <button class="btn btn-primary" onclick="openTab(event, 'location')">Continue</button>
        </div>
    </section>

    <section id="location" class="tab-content constrain">
        <div class="form-row">
            <div>
                <input type="text" placeholder="Address name" name="address-name" required>
            </div>
        </div>

        <div class="form-row">
            <div>
                <input type="text" placeholder="Your Location" name="your-location" required>
            </div>
        </div>

        <div class="form-row">
            <div>
                <input type="text" placeholder="Name of the Consignee" name="consignee-name" required>
            </div>
        </div>

        <div class="form-row">
            <div>
                <input type="text" placeholder="Phone number" name="phone-number" required>
            </div>
        </div>

        <div class="form-row">
            <div>
                <input type="text" placeholder="Delivery note" name="delivery-note" required>
            </div>
        </div>
        
        <div></div>

        <!-- This button submits this form. -->
        <div class="form-row">
            <button type="submit" class="btn btn-primary">Complete</button>
        </div>
    </section>
        
    </form>
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