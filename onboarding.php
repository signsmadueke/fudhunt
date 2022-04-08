<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="author" content="Fudhunt">
    <meta name="description" content="Onboarding">
    <meta name="robots" content="index, follow">

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/flickity.css">

    <title>Onboarding</title>
</head>

<body class="bg-primary container">

    <!-- Top section of the Onboarding page (the white part) -->
    <section id="onboardings" class="constrain"
        data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "0", "LazyLoad": true }'>
        <div class="onboarding">
            <div class="image">
                <img src="assets/images/onboarding/1.svg" width="200px" alt="Onboarding Image">
            </div>

            <div class="dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

            <div class="text">
                <h1>Find the Most Delicious Cuisines</h1>
                <p>Place order for what you want from any restaurant of your choice.</p>
            </div>
        </div>


        <div class="onboarding">
            <div class="image">
                <img src="assets/images/onboarding/2.svg" width="200px" alt="Onboarding Image">
            </div>

            <div class="dots">
                <span class="dot"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
            </div>

            <div class="text">
                <h1>Fast Delivery to Your Doorstep</h1>
                <p>Recieve your order in less than 1 hour or pick specific delivery time.</p>
            </div>
        </div>


        <div class="onboarding">
            <div class="image">
                <img src="assets/images/onboarding/3.svg" width="200px" alt="Onboarding Image">
            </div>

            <div class="dots">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot active"></span>
            </div>

            <div class="text">
                <h1>Follow Your Order as It Moves</h1>
                <p>Realtime-tracking will keep you posted about order progress.</p>
            </div>
        </div>
    </section>
    <!-- Top section of the Onboarding page (the white part) -->

    <!-- Bottom section of the Onboarding page (the orange part) -->
    <section id="onboarding-cta" class="constrain">
        <div class="row">
            <a href="create-new-account" class="btn btn-outline-white">Sign Up</a>
            <a href="login" class="btn btn-white text-primary">Sign In</a>
        </div>
    </section>
    <!-- Bottom section of the Onboarding page (the orange part) -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script> -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/flickity.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>
</body>

</html>