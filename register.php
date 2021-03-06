<?php
require 'include/function4user.php';
if (isset($_POST['submit'])) {
    $result = register_user($_POST);

    if ($result === true) {
        header("Location: login.php?reg=true");
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
    <meta name="description" content="Create New Account">
    <meta name="robots" content="index, follow">

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/flickity.css">

    <title>Create New Account</title>
</head>

<body id="register-page" class="bg-dark container">

    <section id="header" class="header-with-tab">
        <div class="navigation constrain">
            <a href="#" onclick="history.back()" class="back link">
                <img class="svg" src="assets/images/icons/arrow-left.svg" height="5px" alt="Go back">
            </a>
        </div>
        <div class="text constrain">
            <h1 class="title">Register New Account</h1>
            <p>Register a Fudhunt account with your personal and location information.</p>
        </div>

        <div id="tabs" class="constrain">
            <button class="tab active" onclick="openTab(event, 'personal')"><span>Personal</span></button>
            <button class="tab" onclick="openTab(event, 'location')"><span>Location</span></button>
        </div>
    </section>


    <form action="" method="POST">


        <section id="personal" class="tab-content constrain active">
            <div class="form-row">
                <div class="v-grid">
                    <input type="text" placeholder="Full name" name="fullname" id="fullname" required>
                    <label for="fullname">Full Name</label>
                    <?php if (isset($errors['fullname'])) { ?> <p class="error"><?php echo $errors['fullname']; ?></p> <?php } ?>
                </div>
            </div>

            <div class="form-row">
                <div class="v-grid">
                    <input type="text" placeholder="Email" name="email" id="email" required>
                    <label for="email">Email Address</label>
                    <?php if (isset($errors['email'])) { ?> <p class="error"><?php echo $errors['email']; ?></p> <?php } ?>
                    <?php if (isset($errors['emaild'])) { ?> <p class="error"><?php echo $errors['emaild']; ?></p> <?php } ?>
                </div>
            </div>

            <div class="form-row">
                <div class="v-grid">
                    <input type="text" placeholder="Phone Number" name="phone" id="phone" required>
                    <label for="phone">Phone Number</label>
                    <?php if (isset($errors['phone'])) { ?> <p class="error"><?php echo $errors['phone']; ?></p> <?php } ?>
                </div>
            </div>

            <div class="form-row">
                <div class="v-grid">
                    <input type="password" placeholder="Password" name="password" id="password" required>
                    <label for="password">Password</label>
                    <?php if (isset($errors['password'])) { ?> <p class="error"><?php echo $errors['password']; ?></p> <?php } ?>
                    <?php if (isset($errors['passwordd'])) { ?> <p class="error"><?php echo $errors['passwordd']; ?></p> <?php } ?>
                    <!-- This is the error text, it displays form errors. -->
                    <!-- <p class="error">Password is incorrect.</p> -->
                </div>
            </div>

            <div class="form-row">
                <div class="v-grid">
                    <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" required>
                    <label for="cpassword">Confirm Password</label>
                    <?php if (isset($errors['cpassword'])) { ?> <p class="error"><?php echo $errors['cpassword']; ?></p> <?php } ?>
                    <!-- This is the error text, it displays form errors. -->
                    <!-- <p class="error">Password doesn't match.</p> -->
                </div>
            </div>

            <div></div>

            <div class="form-row">
                <button class="btn btn-primary" onclick="openTab(event, 'location')">Continue</button>
            </div>
        </section>

        <section id="location" class="tab-content constrain">

            <div class="form-row">
                <div class="v-grid">
                    <select name="country" id="country" required>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="C??te d'Ivoire">C??te d'Ivoire</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo (Congo-Brazzaville">Congo (Congo-Brazzaville)</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czechia (Czech Republic">Czechia (Czech Republic)</option>
                        <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Eswatini (fmr. " Swaziland">Eswatini (fmr. "Swaziland")</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Holy See">Holy See</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar (formerly Burma">Myanmar (formerly Burma)</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria" selected>Nigeria</option>
                        <option value="North Korea">North Korea</option>
                        <option value="North Macedonia">North Macedonia</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestine State">Palestine State</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Korea">South Korea</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    <label for="country">Country</label>
                    <?php if (isset($errors['country'])) { ?> <p class="error"><?php echo $errors['country']; ?></p> <?php } ?>
                </div>
            </div>

            <div class="form-row">
                <div class="v-grid">
                    <input type="text" placeholder="Address" name="address" id="address" required>
                    <label for="address">Address</label>
                    <?php if (isset($errors['address'])) { ?> <p class="error"><?php echo $errors['address']; ?></p> <?php } ?>
                </div>
            </div>

            <div class="form-row">
                <div class="v-grid">
                    <input type="text" placeholder="State" name="state" id="state" required>
                    <label for="state">State</label>
                    <?php if (isset($errors['state'])) { ?> <p class="error"><?php echo $errors['state']; ?></p> <?php } ?>
                </div>
            </div>

            <div class="form-row">
                <div class="v-grid">
                    <input type="text" placeholder="City" name="city" id="city" required>
                    <label for="city">City</label>
                    <?php if (isset($errors['city'])) { ?> <p class="error"><?php echo $errors['city']; ?></p> <?php } ?>
                </div>

                <div class="v-grid">
                    <input type="text" placeholder="Zip Code" name="zip" id="zip" required>
                    <label for="zip">Zip Code</label>
                    <?php if (isset($errors['zip'])) { ?> <p class="error"><?php echo $errors['zip']; ?></p> <?php } ?>
                </div>
            </div>

            <div class="form-row">
                <div class="v-grid">
                    <textarea name="delivery_note" placeholder="Delivery note" id="delivery-note"></textarea>
                    <label for="delivery-note">Delivery Note</label>
                    <?php if (isset($errors['delivery_note'])) { ?> <p class="error"><?php echo $errors['delivery_note']; ?></p> <?php } ?>
                </div>
            </div>

            <div></div>

            <!-- This button submits this form. -->
            <div class="form-row">
                <button type="submit" name="submit" class="btn btn-primary">Register Account</button>
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