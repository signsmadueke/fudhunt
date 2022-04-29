<?php
ob_start();
session_start();

define('HOST', 'localhost:8889');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'fudhunt');

$link = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

require_once 'mail-function.inc.php';


// Define all helper functions

function sanitize($input)
{
    global $link;
    $input = htmlentities(strip_tags(trim($input)));
    $input = mysqli_real_escape_string($link, $input);
    return $input;
}


function sanitize_email($email)
{
    global $link;
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($email) {
        $email = mysqli_real_escape_string($link, $email);
        return $email;
    }
    return false;
}



function upload_image($file, &$errors)
{
    $size = $file['size'];
    $type = $file['type'];
    $tmp_location = $file['tmp_name'];

    if ($size > 5120000) {
        $errors[] = "Profile picture is too large.";
        return false;
    }

    $allowed_extensions = array("jpg", 'jpeg', 'png', 'gif');
    $file_ext = explode('/', $type);
    $image_ext = strtolower(end($file_ext));
    if (!in_array($image_ext, $allowed_extensions)) {
        $errors[] = "File type not allowed";
        return false;
    }

    $upload_dir = "uploads/";
    $image_name = hash("sha256", uniqid());
    $image_path = $upload_dir . $image_name . "." . $image_ext;

    //move_uploaded_file($tmp_location, $image_path);

    if (move_uploaded_file($tmp_location, $image_path)) {

        //echo "successful";
        return $image_path;
    }

    $errors[] = "Sorry, image upload failed!";
    return false;
}


// help 2

function executeQuery($query)
{
    global $link;

    $fQuery = $query;
    $fExecute = mysqli_query($link, $fQuery);

    if (mysqli_num_rows($fExecute) > 0) {
        return $fExecute;
    } else {
        return false;
    }
}

function validateQuery($query)
{
    global $link;

    $fExecute = mysqli_query($link, $query);
    if ($fExecute) {
        return true;
    } else {
        return false;
    }
}

function checkDuplicate($table, $data, $incoming_data)
{
    global $link;

    $query = "SELECT * FROM $table WHERE $data = '$incoming_data'";
    $execute = mysqli_query($link, $query);

    if (mysqli_num_rows($execute) > 0) {
        return true;
    } else {
        return false;
    }
}

// function encrypt($data) {
//     $data = sha1(md5($data));
//     return $data . "fudhunt";
// }

function verify_password($email, $plain_pw)
{
    global $link;
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($link, $sql);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        $hashed_password = $row['password'];
        $user_id = $row['user_id'];
        if (password_verify($plain_pw, $hashed_password)) {
            $_SESSION['user_id'] = $user_id;
            return true;
        }
        return false;
    }
    return false;
}

function sendMail($to, $username, $email)
{
    $to = $to;
    $subject = "Logged In";

    $message = "
    <html>
    <body>
    <h3>Hello $username,</h3>
    <p>You just logged in to your account as $email</p>
    <p>If you did'nt initiate this login, please click on the link below!</p>
    <button style='padding: 10px'>Click to log user out</button>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <hello@fudhunt.com>' . "\r\n";

    mail($to, $subject, $message, $headers);
}


// helper 2 end


function register_user($post)
{
    global $link;
    $errors = array();
    $err_flag = false;
    extract($post);


    //email
    if (!empty($email)) {
        $email_tmp = sanitize_email($email);
        if (!checkDuplicate("users", "email", $email_tmp)) {
            $email = $email_tmp;
        } else {
            $err_flag = true;
            $errors['emaild'] = "This email has already been used!";
        }
    } else {
        $err_flag = true;
        $errors['email'] = "Enter your email";
    }




    //fullname
    if (!empty($fullname)) {
        $fullname = sanitize($fullname);
    } else {
        $err_flag = true;
        $errors['fullname'] = "Enter your Full Name";
    }


    if (!empty($phone)) {
        $phone = sanitize($phone);
    } else {
        $err_flag = true;
        $errors['phone'] = "Enter your phone number";
    }


    //password
    if (!empty($password)) {
        $password = sanitize($password);
    } else {
        $errors['password'] = "Enter your password";
        $err_flag = true;
    }

    if (!empty($cpassword)) {
        $cpassword = sanitize($cpassword);
    } else {
        $errors['cpassword'] = "Confirm your password";
        $err_flag = true;
    }



    if (isset($password) && isset($cpassword)) {
        if ($password == $cpassword) {
            $password =  password_hash($cpassword, PASSWORD_DEFAULT);
        } else {
            $errors['passwordd'] = "Passwords do not match";
            $err_flag = true;
        }
    }

    if (!empty($country)) {
        $country = sanitize($country);
    } else {
        $err_flag = true;
        $errors['country'] = "Enter your country";
    }

    if (!empty($state)) {
        $state = sanitize($state);
    } else {
        $err_flag = true;
        $errors['state'] = "Enter your state";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    } else {
        $err_flag = true;
        $errors['phone'] = "Enter your phone number";
    }

    if (!empty($address)) {
        $address = sanitize($address);
    } else {
        $err_flag = true;
        $errors['address'] = "Enter your address";
    }

    if (!empty($city)) {
        $city = sanitize($city);
    } else {
        $err_flag = true;
        $errors['city'] = "Enter your city";
    }

    if (!empty($zip)) {
        $zip = sanitize($zip);
    } else {
        $err_flag = true;
        $errors['zip'] = "Enter your zip";
    }

    if (!empty($delivery_note)) {
        $delivery_note = sanitize($delivery_note);
    } else {
        $err_flag = true;
        $errors['delivery_note'] = "Enter your delivery note ";
    }

    // var_dump($err_flag);

    if ($err_flag === false) {
        $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

        $query = validateQuery($sql);
        $user_id = mysqli_insert_id($link);

        var_dump($user_id);

        $sql = "INSERT INTO location (user_id, address, city, zip, state, country, delivery_note, phone, location_status ) VALUES ('$user_id', '$address', '$city', '$zip', '$state', '$country', '$delivery_note', '$phone', 'active')";

        $query = validateQuery($sql);
        echo mysqli_error($link);




        return true;

        if ($query) {
            $subject = "Welcome";
            require_once 'temp.php';
            $response = send_mail($email, $fullname, $subject, $body);

            if ($response) {
                return true;
            } else {
                $errors['sendEmail'] = "Ooops!!! Something went wrong. (Email)";
                return $errors;
            }
        } else {
            $errors['database'] = "Could not insert into database " . mysqli_error($link);
            return $errors;
        }
    }
    return $errors;

    // var_dump($errors);

}




function login_user($post)
{
    global $link;
    $err_flag = false;
    $errors = [];
    extract($post);

    if (!empty($email)) {
        $tmp = sanitize($email);
        if ($tmp) {
            $email = $tmp;
        } else {
            $err_flag = true;
            $errors['emailv'] = "Please enter a valid Email";
        }
    } else {
        $err_flag = true;
        $errors['emaila'] = "Please enter your Email";
    }

    if (!empty($password)) {
        $password = sanitize($post['password']);
    } else {
        $err_flag = true;
        $errors['password'] = "Please enter your password";
    }

    if ($err_flag === false) {
        if (verify_password($email, $password)) {
            return true;
        } else {
            $errors['invalidl'] = "Invalid login details";
            return $errors;
        }
    }

    return $errors;
}


function fetch_userAndAddress($user_id)
{
    global $link;
    $sql = "SELECT * FROM location WHERE user_id = '$user_id'";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    }
    return false;
}

function fetch_cuisine_food($cuisine_id)
{
    global $link;
    $sql = "SELECT * FROM food WHERE cuisine_id = '$cuisine_id' ORDER BY RAND()";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    }
    return false;
}

function fetch_restaurant_food($restaurant_id)
{
    global $link;
    $sql = "SELECT * FROM food WHERE restaurant_id = '$restaurant_id' ORDER BY RAND() LIMIT 30";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    }
    return false;
}

function fetch_single_restaurant($restaurant_id)
{
    global $link;
    $sql = "SELECT * FROM restaurant WHERE restaurant_id= '$restaurant_id'";
    $query = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}


function fetch_user($user_id)
{
    global $link;
    $sql = "SELECT users.*, location.* FROM users
    INNER JOIN location ON users.user_id = location.user_id
    WHERE users.user_id = '$user_id' AND location.location_status = 'active'";
    $query = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

function fetch_single_cuisine($cuisine_id)
{
    global $link;
    $sql = "SELECT * FROM cuisine WHERE cuisine_id= '$cuisine_id'";
    $query = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}


function fetch_cuisine()
{
    global $link;
    $sql = "SELECT * FROM cuisine ORDER BY RAND()";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    }
    return false;
}

function fetch_restaurant()
{
    global $link;
    $sql = "SELECT * FROM restaurant ORDER BY RAND()";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    }
    return false;
}


function fetch_food()
{
    global $link;
    $sql = "SELECT * FROM food ORDER BY RAND()  LIMIT 30";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    }
    return false;
}


function checkout($post, $products)
{
    global $link;
    $errors = array();
    $err_flag = false;
    extract($post);

    if (!empty($user_id)) {
        $user_id = sanitize($post['user_id']);
    } else {
        $err_flag = true;
        $errors['user_id'] = "Please enter your user_id";
    }

    if (!empty($total_prize)) {
        $total_prize = sanitize($post['total_prize']);
    } else {
        $err_flag = true;
        $errors['total_prize'] = "Please enter your total_prize";
    }

    if (!empty($delivery_address)) {
        $delivery_address = sanitize($post['delivery_address']);
    } else {
        $err_flag = true;
        $errors['delivery_address'] = "Please enter your delivery_address";
    }

    if (!empty($delivery_note)) {
        $delivery_note = sanitize($post['delivery_note']);
    } else {
        $err_flag = true;
        $errors['delivery_note'] = "Please enter your delivery_note";
    }

    if ($err_flag === false) {
        $sql = "INSERT INTO order_list (user_id, total_price, products, delivery_address, delivery_note, delivery_status)
        VALUES ('$user_id', '$total_prize', '$products', '$delivery_address', '$delivery_note', 'pending')";
        $query = validateQuery($sql);
        return true;
    }

    return $errors;
}











function fetch_restaurant_food_ten($restaurant_id)
{
    global $link;
    $sql = "SELECT * FROM food WHERE restaurant_id = '$restaurant_id' ORDER BY RAND()";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    }
    return false;
}

function fetch_restaurant_review($review_id)
{
    global $link;
    $sql = "SELECT * FROM food WHERE review_id = '$review_id' ORDER BY RAND()";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    }
    return false;
}

function fetch_single_restaurant_ten($restaurant_id)
{
    global $link;
    $sql = "SELECT * FROM restaurant WHERE restaurant_id= '$restaurant_id' ORDER BY RAND()";
    $query = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

function fetch_single_review($review_id)
{
    global $link;
    $sql = "SELECT * FROM review WHERE review_id= '$review_id' ORDER BY RAND()";
    $query = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}
