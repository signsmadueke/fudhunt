<?php
require_once 'admin/config/db.php';

if (isset($_POST['submit'])) {
    $response = register($_POST);
    if ($response === true) {
        echo "<script>alert('Registration was successful! Redirecting to login...')</script>";
        header("refresh:1; url=login");
    } else if (is_array($response)) {
        foreach ($response as $err) {
            echo "<script>alert('$err')</script>";
        }
    } else {
        echo "<script>alert('$response')</script>"; 
    }
}

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

    <section id="header" class="constrain">
        <div class="navigation">
            <a href="login" class="back">
                <img class="svg" src="assets/images/icons/arrow-left.svg" height="5px" alt="Go back">
            </a>
        </div>
    </section>

    <section id="heading-text" class="constrain">
        <h1 class="title">Create New Account</h1>
    </section>

    <section id="create-new-account-form" class="constrain">
        <form action="" method="POST">
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
                <div>
                    <input type="password" placeholder="Password" name="password">
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
                <button type="submit" class="btn btn-primary" name="submit">Continue</button>
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