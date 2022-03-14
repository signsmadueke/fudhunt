<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="author" content="Fudhunt">
    <meta name="description" content="Verification">
    <meta name="robots" content="index, follow">

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/flickity.css">

    <title>Verification</title>
</head>

<body id="verification-page" class="bg-dark container">

    <section id="header" class="constrain">
        <div class="navigation">
            <a href="forgot-password" class="back">
                <img class="svg" src="assets/images/icons/arrow-left.svg" height="5px" alt="Go back">
            </a>
        </div>
    </section>

    <section id="heading-text" class="constrain">
        <h1 class="title">Verification</h1>
        <p>Enter the OTP code from the phone we just sent you.</p>
    </section>

    <section id="verification-form" class="constrain">
        <form action="reset-password" class="otp" data-group-name="digits" data-autosubmit="false" autocomplete="off">
            <div class="form-row">
                <input type="text" id="digit-1" name="digit-1" data-next="digit-2"/>
                <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1"/>
                <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2"/>
                <input type="text" id="digit-4" name="digit-4" data-previous="digit-3"/>
            </div>

            <p class="error">Oh no! Your account or password is incorrect, please check again.</p>

            <div></div>

            <div class="form-row">
                <p>Didn’t receive OTP code! <a href="#" class="link link-dark">Resend</a></p>
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

    <script>
        $('.otp').find('input').each(function() {
            $(this).attr('maxlength', 1);
            $(this).on('keyup', function(e) {
                var parent = $($(this).parent());
                
                if(e.keyCode === 8 || e.keyCode === 37) {
                    var prev = parent.find('input#' + $(this).data('previous'));
                    
                    if(prev.length) {
                        $(prev).select();
                    }
                } else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
                    var next = parent.find('input#' + $(this).data('next'));
                    
                    if(next.length) {
                        $(next).select();
                    } else {
                        if(parent.data('autosubmit')) {
                            parent.submit();
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>