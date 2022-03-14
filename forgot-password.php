<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="author" content="Fudhunt">
    <meta name="description" content="Forgot Password">
    <meta name="robots" content="index, follow">

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/flickity.css">

    <title>Forgot Password</title>
</head>

<body id="forgot-password-page" class="bg-dark container">

    <section id="header" class="constrain">
        <div class="navigation">
            <a href="login" class="back">
                <img class="svg" src="assets/images/icons/arrow-left.svg" height="5px" alt="Go back">
            </a>
        </div>
    </section>

    <section id="heading-text" class="constrain">
        <h1 class="title">Forgot Password</h1>
        <p>Please enter your Email so we can help you recover your password.</p>
    </section>

    <section id="forgot-password-form" class="constrain">
        <form action="verification">
            <div class="form-row">
                <div>
                    <input type="email" placeholder="Email Address" name="email">
                </div>
            </div>

            <div class="form-row">
                <button type="submit" class="btn btn-primary" name="submit">Next</button>
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