<?php
require_once 'admin/config/db.php';

if (isset($_POST['signin'])) {
    $response = loginUser($_POST);
    if ($response === true) {
        echo "<script>alert('Login was successful! Redirecting...')</script>";
        header("refresh:1; url=discover");
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
    <meta name="description" content="Login">
    <meta name="robots" content="index, follow">

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/flickity.css">

    <title>Login</title>
</head>

<body id="login-page" class="bg-dark container">

    <section id="login-logo" class="constrain">
        <img class="svg" src="assets/images/logo.svg" height="150px" alt="Fudhunt Logo">
    </section>

    <section id="login-form" class="constrain">
        <form action="" method="POST">
            
            <!-- This is the error text, it displays form errors. -->
            <p class="error">Oh no! Your account or password is incorrect, please check again.</p>
            
            <div class="form-row">
                <div>
                    <input type="text" placeholder="Username" name="username">
                </div>
            </div>

            <div class="form-row">
                <div>
                    <input type="password" placeholder="Password" name="password">
                </div>
            </div>

            <div class="form-row reset-password-link">
                <a href="forgot-password" class="link link-secondary">Forgot password!</a>
            </div>

            <div></div>

            <div class="form-row">
                <button type="submit" class="btn btn-secondary" name="signin">Sign In</button>
            </div>

            <!-- Facebook sign in button
            <div class="form-row">
                <a href="#" class="btn btn-facebook">Sign In with Facebook</a>
            </div> -->
        </form>
    </section>

    <section id="create-account-link" class="constrain">
        <p>You don’t have an account? <a href="create-new-account" class="link link-primary">Sign up</a></p>
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