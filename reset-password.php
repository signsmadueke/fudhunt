<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="author" content="Fudhunt">
    <meta name="description" content="Reset Password">
    <meta name="robots" content="index, follow">

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/flickity.css">

    <title>Reset Password</title>
</head>

<body id="reset-password-page" class="bg-dark container">

    <section id="header" class="constrain">
        <div class="navigation">
            <a href="verification" class="back">
                <img class="svg" src="assets/images/icons/arrow-left.svg" height="5px" alt="Go back">
            </a>
        </div>
    </section>

    <section id="heading-text" class="constrain">
        <h1 class="title">Reset Password</h1>
        <p>Enter your new password and confirm.</p>
    </section>

    <section id="reset-password-form" class="constrain">
        <form action="login">
            <div class="form-row">
                <div>
                    <input type="password" placeholder="New Password" name="password">
                </div>
            </div>

            <div class="form-row">
                <div>
                    <input type="password" placeholder="Confirm Password" name="password">
                </div>
            </div>

            <div></div>

            <div class="form-row">
                <button type="submit" class="btn btn-primary" name="submit">Done</button>
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