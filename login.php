<?php   
require 'include/function4user.php';

 if (isset($_POST['signin'])) {
  $result = login_user($_POST);
  if ($result === true) {
   header("Location: index.php");
  } else {
    $errors = $result;
    extract($errors);
    
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
        <img class="svg logo" src="assets/images/logo.svg" height="150px" alt="Fudhunt Logo">
    </section>

    <section id="login-form" class="constrain">
        <form  method="POST">
            
            
            <div class="form-row">
                <div>
                    <input type="text" placeholder="Email" name="email">
     <?php  if (isset($errors['emailv'])) { ?> <p class="error"><?php echo $errors['emailv']; ?></p> <?php } ?>
    <?php  if (isset($errors['emaila'])) { ?> <p class="error"><?php echo $errors['emaila']; ?></p> <?php } ?>
    <?php  if (isset($errors['invalidl'])) { ?> <p class="error"><?php echo $errors['invalidl']; ?></p> <?php } ?>
                </div>
            </div>

            <div class="form-row">
                <div class="v-grid">
                    <input type="password" placeholder="Password" name="password">
     <?php  if (isset($errors['password'])) { ?> <p class="error"><?php echo $errors['password']; ?></p> <?php } ?>
                    <!-- This is the error text, it displays form errors. -->
                    <!-- <p class="error">Password is incorrect.</p> -->
                </div>
            </div>

            <div class="form-row reset-password-link">
                <a href="forgot-password" class="link link-secondary">Forgot password!</a>
            </div>

            <div></div>

            <div class="form-row">
                <button type="submit" class="btn btn-primary" name="signin">Sign In</button>
            </div>
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