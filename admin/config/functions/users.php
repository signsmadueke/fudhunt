
<?php

function register($post) {
    $errors = [];
    extract($post);

    if (!empty($name)) {
        $name = sanitize($name);
    } else {
        $errors[] = "Please provide your fullname";
    }

    if (!empty($email)) {
        if (checkDuplicate("users", "email", $email)) {
            $errors[] = "Email already exists";
        } else {
            $email = sanitize($email);
        }
    } else {
        $errors[] = "Please provide your email address";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    } else {
        $errors[] = "Please provide your phone number";
    }

    if (!empty($password)) {
        $password = encrypt(sanitize($password));
    } else {
        $errors[] = "Please provide your password";
    }
    
    if (!empty($address)) {
        $address = sanitize($address);
    } else {
        $errors[] = "Please provide your address";
    }
    
    if (!empty($dob)) {
        $dob = sanitize($dob);
    } else {
        $errors[] = "Please provide your date of birth";
    }


    if (!$errors) {
        $query = "INSERT INTO users (fullname, email, phone, password, location, dob) VALUES ('$name', '$email', '$phone', '$password',  '$address', '$dob')";

        $execute = validateQuery($query);
        if ($execute) {
            return true;
        } else {
            return "Ooops! Something went wrong, try again";
        }
    } else {
        return $errors;
    }
}


function loginUser($post) {
    $errors = [];
    $err_flag = false;

    extract($post);

    if (!empty($username)) {
        $email = sanitize($username);
    } else {
        $err_flag = true;
        $errors[] = "Username is required";
    }

    if (!empty($password)) {
        $password = sanitize($password);
    } else {
        $err_flag = true;
        $errors[] = "Password is required";
    }

    if ($err_flag === false) {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = executeQuery($query);

        if ($result) {
            $rows = mysqli_fetch_assoc($result);

            if (decrypt($rows['password'], $password)){

                $_SESSION['user'] = $rows['user_id'];
                sendMail($email, $rows['username'], $email);
                return true;
            } else {
                return "Invalid login details";
            }
        } else {
            return "Invalid login information";
        }
    } else {
        return $errors;
    }
}

function Contact($post) {
    $errors = [];
    extract($post);

    if (!empty($fullname)) {
        $fullname = sanitize($fullname);
    } else {
        $errors[] = "Please provide your full name";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $errors[] = "Please provide your email address";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    } else {
        $errors[] = "Please provide your phone number";
    }

    if (!empty($message)) {
        $message = sanitize($message);
    } else {
        $errors[] = "Please provide your message";
    }

    if (!$errors) {
        $query = "INSERT INTO contacts (fullname, email, phone, message) VALUES ('$fullname', '$email', '$phone', '$message')";

        $execute = validateQuery($query);
        if ($execute) {
            return true;
        } else {
            return "Ooops! Something went wrong. Please try again";
        }
    } else {
        return $errors;
    }
}

function addReview($post, $productId) {
    $errors = [];
    extract($post);

    if (!empty($name)) {
        $name = sanitize($name);
    } else {
        $errors[] = "Please provide your name";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $errors[] = "Please provide your email address";
    }

    if (!empty($comment)) {
        $comment = sanitize($comment);
    } else {
        $errors[] = "Please provide your comment";
    }

    if (!$errors) {
        $query = "INSERT INTO reviews (product_id, name, email, comment) VALUES ('$productId', '$name', '$email', '$comment')";

        $execute = validateQuery($query);

        if ($execute) {
            return true;
        } else {
            return "Ooops! Something went wrong. Please try again";
        }
    } else {
        return $errors;
    }
}

function searchProduct($post) {
    $errors = [];
    extract($post);

    if (!empty($q)) {
        $q = sanitize($q);
    } else {
        $errors[] = "Please specify product";
    }

    if (!$errors) {
        $query = "SELECT * FROM products WHERE name LIKE '$q'";
        $execute = executeQuery($query);

        if ($execute) {
            return $execute;
        } else {
            return "Oops! Something went wrong, try again";
        }
    } else {
        return $errors;
    }
}

function addBillingAddress($post, $userId) {
    $errors = [];
    extract($post);

    if (!empty($country)) {
        $country = sanitize($country);
    } else {
        $errors[] = "Please specify your country";
    }

    if ($company) {
        $company = sanitize($company);
    }

    if (!empty($address)) {
        $address = sanitize($address);
    } else {
        $errors[] = "Please specify your address";
    }

    if (!empty($town)) {
        $town = sanitize($town);
    } else {
        $errors[] = "Please specify your town";
    }

    if (!empty($state)) {
        $state = sanitize($state);
    } else {
        $errors[] = "Please specify your state";
    }

    if (!empty($postcode)) {
        $postcode = sanitize($postcode);
    } else {
        $errors[] = "Please specify your postcode";
    }

    if (!empty($notes)) {
        $notes = sanitize($notes);
    } else {
        $errors[] = "Please specify your notes";
    }

    if (checkDuplicate("billings", "user_id", $userId)) {
        $errors[] = "We have your details already! You can change your details in your dashboard";
    }

    if (!$errors) {
        $query = "INSERT INTO billings (user_id, country, company, address, town, state, postcode, notes) VALUES ('$userId', '$country', '$company', '$address', '$town', '$state', '$postcode', '$notes')";

        $execute = validateQuery($query);
        if ($execute) {
            return true;
        } else {
            return "Ooops! Something went wrong. Please try again";
        }
    } else {
        return $errors;
    }
}