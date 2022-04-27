<?php 
ob_start();
session_start();

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "fudhunt");

// define('HOST', 'localhost:8889');
// define('USER', 'root');
// define('PASSWORD', 'root');
// define('DATABASE', 'fudhunt');

$link = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

require_once 'mail-function.inc.php';


// Define all helper functions

function sanitize($input){
    global $link;
    $input = htmlentities(strip_tags(trim($input)));
    $input = mysqli_real_escape_string($link, $input);
    return $input;
}


function sanitize_email($email){
    global $link;
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($email) {
        $email = mysqli_real_escape_string($link, $email);
        return $email;
    } return false;
}



function upload_image($file, &$errors){
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

function executeQuery($query) {
    global $link;

    $fQuery = $query;
    $fExecute = mysqli_query($link, $fQuery);

    if (mysqli_num_rows($fExecute) > 0) {
        return $fExecute;
    } else {
        return false;
    }
}

function validateQuery($query) {
    global $link;

    $fExecute = mysqli_query($link, $query);
    if ($fExecute) {
        return true;
    } else {
        return false;
    }
}

function checkDuplicate($table, $data, $incoming_data) {
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

function verify_password($email, $plain_pw){
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
        } return false;
    } return false;
}

function sendMail($to, $username, $email) {
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
    $headers .= 'From: <hello@zero.com>' . "\r\n";

    mail($to,$subject,$message,$headers);
}


// helper 2 end


function register_user($post){
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

        // var_dump($user_id);
        
        $sql = "INSERT INTO location (user_id, address, city, zip, state, country, delivery_note, phone, location_status ) VALUES ('$user_id', '$address', '$city', '$zip', '$state', '$country', '$delivery_note', '$phone', 'active')";

         $query = validateQuery($sql);
         // echo mysqli_error($link);

      //  return true;
        
        if ($query) {
            $subject = "Welcome to fudhunt";
            $body = "Dear $fullname, <br> You are welcome to fudhunt. We are at your service <br> Thank You";

            if ($query) {
                 $response = send_mail($email, $subject, $body);
                    return true;
            } else {
                $errors['sendEmail'] = "Ooops!!! Something went wrong. (Email)";
                return $errors;
            }
        } else {
            $errors['database'] = "Could not insert into database " . mysqli_error($link);
            return $errors;
        }
    } return $errors;

// var_dump($errors);

}


function forget($post){
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

    if ($err_flag === false) {


    $sql = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($link, $sql);
    if (mysqli_num_rows($query) > 0) {

        $reset = rand(1000,9999);

        $sql = "UPDATE users SET  reset ='$reset' WHERE email = '$email'";
          $query = mysqli_query($link, $sql);


        $subject = "Forget password";
        $body = "We have received a request to reset the password for your account. <br>

        Your password reset link is http://localhost:8080/fudhunt2/verification.php?email=$email <br>
        Reset Code: $reset
        ";



        send_mail($email, $subject, $body);

        } 
}
}

function new_password($post, $email){
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

    if ($err_flag === false) {
         $sql = "UPDATE users SET  password ='$password' WHERE email = '$email'";
             $query = mysqli_query($link, $sql);

    if ($query) {
        return true;
    }
    

    } return $errors;
}


function reset_password($code, $email){
    global $link;
    $err_flag = false;
    $errors = [];
        echo $email;

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



    if (!empty($code)) {
        $code = sanitize($code);
    } else {
        $err_flag = true;
        $errors['code'] = "Please enter your rest code";
    }

    if ($err_flag === false) {

        // var_dump($code);
       

        $sql = "SELECT * FROM users WHERE email = '$email' AND reset = '$code'";
        $query = mysqli_query($link, $sql);

        // var_dump($query);
            if (mysqli_num_rows($query) > 0) {
            return true;
        }   else {
                    $errors['invalidl'] = "Invalid reset code";
                    return $errors;
                }
    } return $errors;
}

   



function login_user($post){
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
    } return $errors;
}


function fetch_userAndAddress($user_id){
    global $link;
    $sql = "SELECT * FROM location WHERE user_id = '$user_id'";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    } return false;
}


function fetch_pending_order($user_id){
    global $link;
    $sql = "SELECT * FROM order_list WHERE user_id = '$user_id' AND delivery_status = 'pending'";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    } return false;
}


function fetch_order($user_id){
    global $link;
    $sql = "SELECT * FROM order_list WHERE user_id = '$user_id'";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    } return false;
}


function fetch_cuisine_food($cuisine_id){
    global $link;
    $sql = "SELECT * FROM food WHERE cuisine_id = '$cuisine_id' LIMIT 20";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    } return false;
}




function fetch_user($user_id){
    global $link;
    $sql = "SELECT users.*, location.* FROM users INNER JOIN location ON users.user_id = location.user_id WHERE users.user_id = '$user_id' AND location.location_status = 'active'";
    $query = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($query); 
    return $row;    
}

function fetch_single_cuisine($cuisine_id){
    global $link;
    $sql = "SELECT * FROM cuisine WHERE cuisine_id= '$cuisine_id'";
    $query = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($query); 
    return $row;    
}



function fetch_cuisine(){
    global $link;
    $sql = "SELECT * FROM cuisine ";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    } return false;
}

function fetch_restaurant(){
    global $link;
    $sql = "SELECT * FROM restaurant ";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    } return false;
}


function fetch_food(){
    global $link;
    $sql = "SELECT * FROM food LIMIT 30";
    $query = mysqli_query($link, $sql);
    $posts = [];
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        return $posts;
    } return false;
}



function checkout($post, $products){
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
   $sql = "INSERT INTO order_list (user_id, total_price, products, delivery_address, delivery_note, delivery_status) VALUES ('$user_id', '$total_prize', '$products', '$delivery_address', '$delivery_note', 'pending')";

         $query = validateQuery($sql);
        return true;
        unset($_SESSION['cart']);
    }

    return $errors;
}







// function add_fund($post){
//     global $link;
//     $errors = array();
//     $err_flag = false;
//     extract($post);
//     $user_id = $_SESSION['24user_id'];

//     if (!empty($crypto_currency)) {
//         $crypto_currency = sanitize($crypto_currency);   
//     } else {
//         $errors['crypto_currency'] = "Enter a Cryptocurrency";
//         $err_flag = true;
//     }

    

//     if (!empty($usd_amount)) {
//         $usd_amount = sanitize(floatval($usd_amount));   
//     } else {
//         $errors['usd_amount'] = "Enter Amount in USD";
//         $err_flag = true;
//     }

//         if ($err_flag === false) {


//         $sql = "INSERT INTO fund (user_id, crypto_currency,  temp_amount) VALUES ('$user_id', '$crypto_currency', '$usd_amount')";
//         $query = mysqli_query($link, $sql);
//           $fund_id = mysqli_insert_id($link);
//         return $fund_id;
//     }

// }




// function add_proof($post, $file){
//     global $link;
//     $errors = array();
//     $err_flag = false;
//     extract($post); 
//     $user_id = $_SESSION['24user_id'];

//     if (!empty($proof_comment)) {
//         $proof_comment = sanitize($proof_comment);   
//     } else {
//         $errors['proof_comment'] = "Enter a comment on proof";
//         $err_flag = true;
//     }

    
//     $image_path = upload_image($file, $errors);
    
//     $sql = "UPDATE fund SET  proof_comment ='$proof_comment', proof_pix = '$image_path' WHERE fund_id = '$fund_id'";
//             $query = mysqli_query($link, $sql);

//     if ($query) {
//         return true;
//     }
//     // var_dump($query);
//     // $id = mysqli_insert_id($link);
    
            
// }



// function create_trade($post){
//     global $link;
//     $errors = array();
//     $err_flag = false;
//     extract($post);
//     $user_id = $_SESSION['24user_id'];



//      if (!empty($balance)) {
//         $balance = floatval($balance);
//     } else {
//         $errors['balance'] = "Enter balance";
//         $err_flag = true;
//     }

//     if ($balance <= 0 ) {
//        $errors['low'] = "balance is low";
//         $err_flag = true;
//     } 


//     if (!empty($sell_amount)) {
//         $sell_amount = sanitize(floatval($sell_amount));   
//     } else {
//         $errors['sell_amount'] = "Enter sell_amount";
//         $err_flag = true;
//     }


//      if (!empty($buy_amount)) {
//         $buy_amount = sanitize(floatval($buy_amount));   
//     } else {
//         $errors['buy_amount'] = "Enter buy_amount";
//         $err_flag = true;
//     }



//     if (!empty($role)) {
//         $role = sanitize($role); 
//     } else {
//         $errors['role'] = "Enter role";
//         $err_flag = true;
//     }

//     if ($role === "buyer") {
//         $secondrole === "seller";
//         $tradefirst_total_amount = $sell_amount;
//        $tradersecond_total_amount = $buy_amount; 

//     }


//     if ($role === "seller") {
//         $secondrole ="buyer";
//         $tradefirst_total_amount = $buy_amount;
//         $tradersecond_total_amount = $sell_amount;
//     }

//     if (!empty($fee_split)) {
//         $fee_split = sanitize($fee_split);
//         if ($fee_split === "equal") {
//             $fee_split = "50% of escrow fee";
//             $bfee_split = "50% of escrow fee";
//         }

//         if ($fee_split === "seller") {
//             $fee_split = "seller";
//             $bfee_split = "buyer";
//         }

//         if ($fee_split === "buyer") {
//             $fee_split = "buyer";
//              $bfee_split = "seller";
//         }

//     } else {

//         $errors['fee_split'] = "Enter fee_split";
//         $err_flag = true;
//     }


//     $stotal_amount= $buy_amount;

//     $sfee_payable = (10/ 100) * $stotal_amount;
//     // $bfee_payable = "w";

//     if ($err_flag === false) {

//     $sql = "INSERT INTO tradefirst (user_id, trade_balance, tradefirst_role, tradefirst_name, tradefirst_email, tradefirst_es_amount, tradefirst_fee_split, tradefirst_fee_pay, tradefirst_total_amount, tradefirst_coin_sending, tradefirst_coin_recieveing, tradefirst_pay_status, tradefirst_withdraw_status) VALUES ('$user_id', '$balance', '$role', '$fullname', '$email', '$sell_amount', '$fee_split', '$sfee_payable','$tradefirst_total_amount', '$sell_crypto', '$buy_crypto', 'waiting', 'null')";

//         $query = mysqli_query($link, $sql);


//     $id = mysqli_insert_id($link);

//     $response = fetch_partner($buyer_email);
//     extract($response);

//         $sql = "INSERT INTO tradesecond (tradefirst_id, tradersecond_role, tradersecond_name, tradersecond_email, tradersecond_es_amount, tradersecond_fee_split, tradersecond_fee_pay, tradersecond_total_amount, tradersecond_coin_sending, tradersecond_coin_recieving, tradersecond_pay_status, tradersecond_withdraw_status) VALUES ('$id', '$secondrole', '$fullname', '$email', '$buy_amount', '$bfee_split', '$sfee_payable', '$tradersecond_total_amount','$buy_crypto', '$sell_crypto', 'waiting', 'null')";

//         $query = mysqli_query($link, $sql);

//         $subject = "Escrow Trade has been created";
//         $body = "Dear $fullname, <br>
//                 A trade was created for you to join on https://counosswapx.io/ <br>
//                 Your transaction: $id";

//          $response = send_mail($email, $fullname, $subject, $body);

//  return $id;
// }   
// else{
//     return $errors;
// }
// }


// function join_trade($post){
//     global $link;
//     $errors = array();
//     $err_flag = false;
//     extract($post);
//     $user_id = $_SESSION['24user_id'];
   

//     $sql = "SELECT * FROM tradesecond WHERE tradefirst_id = '$tradefirst_id'";
//         $query = mysqli_query($link, $sql);
//          if (mysqli_num_rows($query) > 0) {
//         //         $row = mysqli_fetch_array($query);              
//         //             extract($row);
//         // // logic

    
// $sql = "UPDATE tradesecond 
//             SET room = 'join'
//                 WHERE tradefirst_id = '$tradefirst_id'";
//         $query = mysqli_query($link, $sql);

                  
//             return true;
//         }   else {
//             return false;
//         }
// }



// function active_trade($user_id){
//     global $link;
//     $sql = "SELECT tradefirst.*, tradesecond.* FROM tradefirst INNER JOIN tradesecond ON tradefirst.tradefirst_id = tradesecond.tradefirst_id WHERE tradefirst.user_id  = '$user_id'";
//     $query = mysqli_query($link, $sql);
//     if(mysqli_num_rows($query) > 0){
//         $num = mysqli_num_rows($query);
//         return $num;
//     } else{
//         return false;
//     }
// }

// function total_trade(){
//     $user_id = $_SESSION['24user_id'];
//     global $link;
//     $sql = "SELECT * FROM tradefirst WHERE user_id='$user_id'";
//     $query = mysqli_query($link, $sql);
//     if(mysqli_num_rows($query) > 0){
//         $num = mysqli_num_rows($query);
//         return $num;
//     } else{
//         return false;
//     }
// }

// function complete_trade(){
//       $user_id = $_SESSION['24user_id'];
//    global $link;
//     $sql = "SELECT tradefirst.*, tradesecond.* FROM tradefirst INNER JOIN tradesecond ON tradefirst.tradefirst_id = tradesecond.tradefirst_id WHERE tradefirst.tradefirst_pay_status  = 'paid' AND tradesecond.tradersecond_pay_status = 'paid'";
//     $query = mysqli_query($link, $sql);
//     if(mysqli_num_rows($query) > 0){
//         $num = mysqli_num_rows($query);
//         return $num;
//     } else{
//         return false;
//     }
// }




// // function total_trade(){
// //     $user_id = $_SESSION['24user_id'];
// //     global $link;
// //     $sql = "SELECT * FROM trade WHERE user_id='$user_id'";
// //     $query = mysqli_query($link, $sql);
// //     if(mysqli_num_rows($query) > 0){
// //         $num = mysqli_num_rows($query);
// //         return $num;
// //     } else{
// //         return false;
// //     }
// // }


// function fetch_coin(){
//     global $link;
//     $sql = "SELECT * FROM coin ";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false;
// }


// function fetch_accounts(){
//     global $link;
//     $user_id = $_SESSION['24user_id'];
//     $sql = "SELECT * FROM fund WHERE user_id = '$user_id'";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false;
// }

// function fetch_tx(){
//     global $link;
//     $user_id = $_SESSION['24user_id'];
//     $sql = "SELECT * FROM fund WHERE user_id = '$user_id'";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false;
// }

// function fetch_withdraw(){
//     global $link;
//     $user_id = $_SESSION['24user_id'];
//     $sql = "SELECT * FROM withdrawal WHERE user_id = '$user_id'";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false;
// }




// function fetch_rooms(){
//     global $link;
//     $user_id = $_SESSION['24user_id'];
//     $sql = "SELECT * FROM tradefirst WHERE user_id = '$user_id'";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false;
// }

// function fetch_room($tradefirst_id){
//     global $link;
//     $user_id = $_SESSION['24user_id'];


    
//     $sql = "SELECT tradefirst.*, tradesecond.* FROM tradefirst INNER JOIN tradesecond ON tradefirst.tradefirst_id = tradesecond.tradefirst_id WHERE tradefirst.tradefirst_id  = '$tradefirst_id'";
//     $query = mysqli_query($link, $sql);

//     // var_dump($query);
//     $row = mysqli_fetch_assoc($query);
//     return $row;
// }






// function fetch_single_fund($fund_id){
//     global $link;
//     $sql = "SELECT * FROM fund WHERE fund_id = '$fund_id'";
//     $query = mysqli_query($link, $sql);
//     $row = mysqli_fetch_assoc($query);
//     return $row;
// }

// function fetch_cc($crypto_currency){
//     global $link;
//     $sql = "SELECT * FROM coin WHERE coin_name = '$crypto_currency'";
//     $query = mysqli_query($link, $sql);
//     $row = mysqli_fetch_assoc($query);
//     return $row;
// }


// function fetch_users(){
//     global $link;
//     $sql = "SELECT * FROM users ORDER BY user_id DESC";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false;
// }


// function fetch_history($user_id){
//     global $link;
//     //$sql = "SELECT * FROM history ORDER BY user_id DESC WHERE user_id = '$user_id'";
//     $sql = "SELECT * FROM history WHERE user_id = '$user_id'";
//     $query = mysqli_query($link, $sql);
//     $posts = [];

//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false;


// }

// function fetch_single_plan($plan_name){
//     global $link;
//     $sql = "SELECT * FROM plan WHERE plan_name = '$plan_name'";
//     $query = mysqli_query($link, $sql);
//     $row = mysqli_fetch_assoc($query);
//         return $row;
// }

// function fetch_plan(){
//     global $link;
//     $sql = "SELECT * FROM plan ORDER BY plan_id";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false;
// }

// function fetch_single_history(){
//     global $link;
//     //$sql = "SELECT * FROM history ORDER BY user_id DESC WHERE user_id = '$user_id'";
//     $sql = "SELECT * FROM history WHERE history_id = '$history_id'";
//     $query = mysqli_query($link, $sql);
//     $row = mysqli_fetch_assoc($query); 
//     return $row;
    
    
// }




// function total_users(){

//     global $link;
//     $sql = "SELECT * FROM users";
//     $query = mysqli_query($link, $sql);
//     if(mysqli_num_rows($query) > 0){
//         $num = mysqli_num_rows($query);
//         return $num;
//     } else{
//         return false;
//     }

// }


// function fetch_partner($email){
//     global $link;
//     //$sql = "SELECT * FROM history ORDER BY user_id DESC WHERE user_id = '$user_id'";
//     $sql = "SELECT * FROM users WHERE email = '$email'";
//     $query = mysqli_query($link, $sql);
//     $row = mysqli_fetch_assoc($query); 
//     return $row;    
// }

// function fetch_user($user_id){
//     global $link;
//     //$sql = "SELECT * FROM history ORDER BY user_id DESC WHERE user_id = '$user_id'";
//     $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
//     $query = mysqli_query($link, $sql);
//     $row = mysqli_fetch_assoc($query); 
//     return $row;    
// }

// function fetch_tw($user_id, $txt){
//     global $link;
//     //$sql = "SELECT * FROM history ORDER BY user_id DESC WHERE user_id = '$user_id'";
//     $sql = "SELECT * FROM tx WHERE user_id = '$user_id'  AND txType = '$txt'";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false; 
// }

// function fetch_td($user_id, $txt){
//     global $link;
//     //$sql = "SELECT * FROM history ORDER BY user_id DESC WHERE user_id = '$user_id'";
//     $sql = "SELECT * FROM tx WHERE user_id = '$user_id'  AND txType = '$txt'";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false; 
// }


// function fetch_lw($user_id, $txt){
//     global $link;
//     $sql = "SELECT * FROM tx WHERE user_id = '$user_id'  AND txType = '$txt' LIMIT 1";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false; 
// }


// function fetch_ld($user_id, $txt){
//     global $link;
//     $sql = "SELECT * FROM tx WHERE user_id = '$user_id'  AND txType = 'withdraw' LIMIT 1";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false; 
// }

// function fetch_ad($user_id, $status, $txt){
//     global $link;
//     $sql = "SELECT * FROM tx WHERE user_id = '$user_id' AND status = '$status' AND txType = '$txt'";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false; 
// }

// function fetch_admin_btc(){
//     global $link;
//     $sql = "SELECT admin_btc FROM admin";
//     $query = mysqli_query($link, $sql);
//     $row = mysqli_fetch_assoc($query);
//     return $row; 
                
// }



// function fetch_d($user_id, $status, $txt){
//     global $link;
//     //$sql = "SELECT * FROM history ORDER BY user_id DESC WHERE user_id = '$user_id'";
//     $sql = "SELECT * FROM tx WHERE user_id = '$user_id' AND status = '$status' AND txType = '$txt'";
//     $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $posts[] = $row;
//         }
//         return $posts;
//     } return false; 
// }

// function admin_wallet(){
//     global $link;
//     //$sql = "SELECT * FROM history ORDER BY user_id DESC WHERE user_id = '$user_id'";
//     $sql = "SELECT * FROM admin ";
//     $query = mysqli_query($link, $sql);
//     $row = mysqli_fetch_assoc($query); 
//     return $row;
// }



// function fetch_userii($user_id){
//     global $link;
//     $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
//         $query = mysqli_query($link, $sql);
//         $users = [];
//     if(mysqli_num_rows($query) > 0){
//         while ($row = mysqli_fetch_assoc($query)) {
//             $users[] = $row; 
//         }return $users;
//     }return $users;
// }


// function fetch_earn($user_id){
//     global $link;
    
//     $sql = "SELECT deposit.*, withdraw.* FROM deposit INNER JOIN withdraw ON deposit.id = withdraw.id WHERE deposit.id = 
//     $user_id";
//         $query = mysqli_query($link, $sql);
//         $users = [];
//     if(mysqli_num_rows($query) > 0){
//         while ($row = mysqli_fetch_assoc($query)) {
//             $users[] = $row; 
//         }return $users;
//     }return $users;
// }


// function update_history($post, $history_id){
//     global $link;
//     extract($post);
//         //$amount = intval($amount);
        
//         $sql = " UPDATE history 
    
//         SET trans_date = '$trans_date', trans_discrip ='$trans_discrip', amount= '$amount', currency='$currency'WHERE history_id = '$history_id'";
//         $query = mysqli_query($link, $sql);

            
//         // echo mysqli_error($link);

//         // var_dump($query);

         
// // UPDATE history SET trans_date='$trans_date',trans_discrip='$trans_discrip',amount= 5,currency='$currency' WHERE user_id = 34

// }


// function update_user($post){
//     global $link;
//     extract($post);
//           $user_id = $_SESSION['24user_id']; 

//         $sql = "UPDATE users 
//         SET fullname='$fullname',password='$password',btc='$btc',email='$email'
//         WHERE id ='$user_id'";
//         $query = mysqli_query($link, $sql);

//         if ($query) {
//             return true;
//         }
// }




// function update_pic($post, $file){
//     global $link;
//     extract($post);

//         // if (!empty($picture)) {
//         //  $newPics = $picture;
//         // }
//         $image_path = upload_image($file, $errors);
        
    
    
//         $sql = "UPDATE users 
//         SET profile_pic_path='$image_path'
//         WHERE user_id ='$user_id'";
//         $query = mysqli_query($link, $sql);




// }





// function add_history($post){
//     global $link;
//     $errors = array();
//     $err_flag = false;
//     extract($post); 
    
//     $sql = "INSERT INTO history(user_id, trans_date, trans_discrip, amount, currency) VALUES ('$user_id', '$trans_date','$trans_discrip', '$amount', '$currency')";

//     $query = mysqli_query($link, $sql);

//         if ($query) {
//             return true;
//         }else{
//             $errors[] = "Could not update database " . mysqli_error($link);
//             return $errors;
//         }
            
//     }//return $errors;



// function add_user($post, $file){
//     global $link;
//     $errors = array();
//     $err_flag = false;
//     extract($post); 

    
//     $image_path = upload_image($file, $errors);
    
//     $sql = "INSERT INTO users(title, surname, firstname, lastname, email, phone, gender, address, country, state, password, dob, username, profile_pic_path) VALUES ('$title', '$surname','$firstname','$lastname', '$email', '$phone', '$gender', '$address', '$country', '$state', '$password', '$dob', '$username','$image_path')";

//     $query = mysqli_query($link, $sql);

//     var_dump($query);

    
//     $id = mysqli_insert_id($link);
    
//         $sql = "INSERT INTO bene(user_id, bene_name, bene_acct_no) VALUES('$id', 'Andrew Green','1983765432')"; 
//         $query = mysqli_query($link, $sql); 

//         $sql = "INSERT INTO history(user_id, trans_date, trans_discrip, amount, currency) VALUES('$id', '2019-07-21 06:42:21am','ATM Withdrawal', '215','o')"; 
//         $query = mysqli_query($link, $sql);     


//     $sql = "INSERT INTO transactions(user_id, account_number, account_type, currency, account_status, currency_sym, balance, token, next_kin, acc_officer) VALUES('$id', '$account_number','$account_type', '$currency', '$account_status', '$currency_sym', '$balance', '$token', '$next_kin', '$acc_officer')"; 

//         $query = mysqli_query($link, $sql); 

//         if ($query) {
//             return true;
//         }else{
//             $errors[] = "Could not update database " . mysqli_error($link);
//             return $errors;
//         }
            
//     }//return $errors;



// function changee_password($post){
//     global $link;
//     $errors = array();
//     $err_flag = false;

    
//     if (!empty($post['password'])) {
//         $password = sanitize($post['password']);
    
//     } else {
//         $errors['password'] = "Enter new password";
//         $err_flag = true;
//     }

    
//     if (!empty($post['cpassword'])) {
//         $cpassword = sanitize($post['cpassword']);
    
//     } else {
//         $errors['cpassword'] = "confirm new password";
//         $err_flag = true;
//     }


//     if (!empty($post['npassword'])) {
//         $npassword = sanitize($post['npassword']);
    
//     } else {
//         $errors['npassword'] = "confirm new password";
//         $err_flag = true;
//     }

    


//     if ($cpassword != $npassword) {
//         $errors['mismatch'] = "mis match password.";
//         $err_flag = true;

//     }

//     if ($err_flag === false) {
//         $sql = "UPDATE users 
//         SET password='$npassword'";

//         $query = mysqli_query($link, $sql);
//         if ($query) {
//             return true;
//         } else {
//             $errors['error'] = "Error entering question please Try again" . mysqli_error($link);
//             return $errors;
            
//         }
//     }  return $errors;


// }

// function duration($inv,$dur){
//     $inv = intval($inv);
//     $dur = intval($dur);
//     $inv_due = $dur * 3600;
//     $inv_due = $inv_due + $inv;
//     return $inv_due;
// }

// function invest_b($duration, $max, $min, $roi, $plan_name, $fullname, $email, $amount, $balance){
//     global $link;
//     $errors = array();
//     $err_flag = false;
//     extract($post);
//          $id = $_SESSION['24user_id'];
    
//     if (!empty($duration)) {
//         $duration = sanitize(floatval($duration));   
//     } else {
//         $errors['duration'] = "Enter duration";
//         $err_flag = true;
//     }


//     if (!empty($max)) {
//         $max = sanitize(floatval($max));   
//     } else {
//         $errors['max'] = "Enter max";
//         $err_flag = true;
//     }

//     if (!empty($min)) {
//         $min = sanitize(floatval($min));   
//     } else {
//         $errors['min'] = "Enter min";
//         $err_flag = true;
//     }

//     if (!empty($roi)) {
//         $roi = sanitize(floatval($roi));   
//     } else {
//         $errors['roi'] = "Enter roi";
//         $err_flag = true;
//     }


//         if (!empty($balance)) {
//         $balance = sanitize(floatval($balance));   
//     } else {
//         $errors['balance'] = " balance";
//         $err_flag = true;
//     }



//     if (!empty($plan_name)) {
//         $plan_name = sanitize($plan_name);   
//     } else {
//         $errors['plan_name'] = "Enter plan_name";
//         $err_flag = true;
//     }

//     if (!empty($amount)) {
//         $amount = sanitize(floatval($amount));   
//     } else {
//         $errors['amount'] = "Enter amount";
//         $err_flag = true;
//     }

//     if ($amount >= $max) {
//          $errors['maxi'] = "Amount is greater than Maximuim amount";
//         $err_flag = true;   
//     }

//     if ($amount <= $min) {
//          $errors['mini'] = "Amount is smaller than Minmuim Amount";
//         $err_flag = true;   
//     }

//      if ($amount >= $balance) {
//          $errors['insuff'] = "Insufficient account balance";
//         $err_flag = true;   
//     }


//     if ($err_flag === false) {
//         $depo_date = time();
//         $depo_return_date = duration($depo_date, $duration);
//         $ex_amount = ($roi / 100) * $amount;
//         $ex_amount = $ex_amount + $amount; 

//         $sql = "INSERT INTO deposit (id, plan, roi, amount, ex_amount, depo_date, depo_return_date, status) VALUES 
//         ('$id', '$plan_name', '$roi', '$amount', '$ex_amount', '$depo_date', '$depo_return_date', 'pending')";
        
//         $query = mysqli_query($link, $sql);
//         $depo_id = mysqli_insert_id($link);
        
        
        
//         if ($query) {
//             $subject = "New Deposit";
//             $body = "Dear $fullname, <br>
// Your Deposit has been approved <br>
// Amount: $$amount <br>
// plan: $plan_name";

//         $to= $email;

//         update_invest_b($id, $depo_id, $amount, $balance);

//         // header('Location:?a=deposit2&order_id='.$depo_id.'&plan='.$plan_name.'&roi='.$roi.'&duration='.$duration.'&amount='.$amount);

    

//             $response = send_mail($to, $fullname, $subject, $body);

//             if ($response) {
//                     return true;
//             } else {
//                 $errors['sendEmail'] = "Ooops!!! Something went wrong. (Email)";
//                 return $errors;
//             }
//         } else {
//             $errors['database'] = "Could not insert into database " . mysqli_error($link);
//             return $errors;
//         }
//     } return $errors;
    
            
// }//return $errors;



// function fetch_funds($user_id, $crypto_currency){
//     global $link;
//     $sql = "SELECT * FROM fund WHERE user_id = '$user_id' AND crypto_currency = '$crypto_currency'";
//     $query = mysqli_query($link, $sql);
    
//     if (mysqli_num_rows($query) > 0) {
//         $row = mysqli_fetch_array($query);   
//             return $row;
//         }   else {
//         return false;
//         }

// }




// function withdraw($post){
//     global $link;
//     $errors = array();
//     $err_flag = false;
//     extract($post);
//     $user_id = $_SESSION['24user_id']; 

//     $coin = fetch_funds($user_id, $crypto_currency);
//     if ($coin === false) {
//          $err_flag = true;
//         $errors['ins'] = "no crypto";     
        
//     }else{
//         extract($coin);
//         $usd_amount = sanitize($usd_amount);
//         $usd_amount = floatval($usd_amount);

//          if ($withdraw_amount > $usd_amount) {
//         $errors['insuff'] = "Insufficient account balance"; 
//         $err_flag = true;   
//     }else{
//         $ball = $usd_amount - $withdraw_amount;   
//     }


//     }



//     // var_dump($coin);

//     if (!empty($withdraw_amount)) {
//         $withdraw_amount = sanitize($withdraw_amount);
//         $withdraw_amount = floatval($withdraw_amount);
//     } else {
//         $err_flag = true;
//         $errors['withdraw_amount'] = "Enter Amount to Withdraw";     
//     }

    


//     if ($err_flag === false) {
//     $sql = "INSERT INTO withdrawal (user_id, crypto_currency, withdraw_amount, crypto_address,  withdraw_status)
//      VALUES ('$user_id', '$crypto_currency', '$withdraw_amount', '$crypto_address', 'pending')";
//     $query = mysqli_query($link, $sql);


//     $sql = " UPDATE fund 
//             SET usd_amount = '$ball' WHERE user_id = '$user_id'";
//         $query = mysqli_query($link, $sql);


//     echo mysqli_error($link);
//     return true;
// }
//     return $errors;
    
   

            
// }

//     function fetch_some_depo($plan_name){
//     global $link;
    
//     $sql = "SELECT * FROM deposit  WHERE plan = '$plan_name'";
//     //$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
//         $query = mysqli_query($link, $sql);
//         $users = [];
//     if(mysqli_num_rows($query) > 0){
//         while ($row = mysqli_fetch_assoc($query)) {
//             $users[] = $row; 
//         }return $users;
//     }return $users;
// }

// // function fetch_withdraw($user_id){
// //  global $link;
    
// //  $sql = "SELECT * FROM tx  WHERE user_id = $user_id";
// //  //$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
// //      $query = mysqli_query($link, $sql);
// //      $users = [];
// //  if(mysqli_num_rows($query) > 0){
// //      while ($row = mysqli_fetch_assoc($query)) {
// //          $users[] = $row; 
// //      }return $users;
// //  }return $users;
// // }



// function updatepro($post){
//     global $link;
//     extract($post);
//         //$amount = intval($amount);
//      $user_id = $_SESSION['24user_id'];  
        
//         $sql = " UPDATE users 
    
//         SET fullname = '$fullname', email ='$email', phone= '$phone', country='$country', password='$password'WHERE user_id = '$user_id'";
//         $query = mysqli_query($link, $sql);

            
//         // echo mysqli_error($link);

//         // var_dump($query);

         
// // UPDATE history SET trans_date='$trans_date',trans_discrip='$trans_discrip',amount= 5,currency='$currency' WHERE user_id = 34

// }

// function fetch_total_earn($user_id){
//     global $link;
//     $sql = "SELECT amount FROM deposit  WHERE id = '$user_id' AND status ='confirm'";
//         $query = mysqli_query($link, $sql);
//         $users = [];
//     if(mysqli_num_rows($query) > 0){
//         while ($row = mysqli_fetch_assoc($query)) {
//             extract($row);
//             $amount = floatval($amount);
//             $amount += $amount; 
//         }return $amount;
// }}

// function fetch_pending_withdraw($user_id){
//     global $link;
//     $sql = "SELECT withdraw_amount FROM withdraw  WHERE id = '$user_id' AND withdraw_status ='pending'";
//         $query = mysqli_query($link, $sql);

//     if(mysqli_num_rows($query) == 1){
//         $row = mysqli_fetch_assoc($query);
//             extract($row);
//             $amount = floatval($withdraw_amount);
//         return $amount;
//     }

//     if(mysqli_num_rows($query) > 0){
//         while ($row = mysqli_fetch_assoc($query)) {
//             extract($row);
//             $amount = floatval($withdraw_amount);
//             $amount += $amount;
//             return $amount;
//         }
// }}

// function fetch_withdraw_total($user_id){
//     global $link;
//     $sql = "SELECT withdraw_amount FROM withdraw  WHERE id = '$user_id'";
//         $query = mysqli_query($link, $sql);
//         $users = [];

//         if(mysqli_num_rows($query) == 1){
//         $row = mysqli_fetch_assoc($query);
//             extract($row);
//             $amount = floatval($withdraw_amount);
//         return $amount;
//     }

//     if(mysqli_num_rows($query) > 0){
//         while ($row = mysqli_fetch_assoc($query)) {
//             extract($row);
//             $amount = floatval($withdraw_amount);
//             $amount += $amount;
//             return $amount;
// }}}


// function fetch_last_depo($user_id){
//     global $link;
//     $sql = "SELECT amount FROM deposit  WHERE id = '$user_id' AND status = 'condirm' ORDER BY depo_id DESC";
//         $query = mysqli_query($link, $sql);
//         $row = mysqli_fetch_assoc($query);
//         extract($row);
//         return $row;
// }

// function fetch_last_with($user_id){
//     global $link;
//     $sql = "SELECT withdraw_amount FROM withdraw  WHERE id = '$user_id'";
//         $query = mysqli_query($link, $sql);
//         $row = mysqli_fetch_assoc($query);
//         extract($row);
//         return $row;
// }


// function fetch_total_depo($user_id){
//     global $link;
//     $sql = "SELECT amount FROM deposit  WHERE id = '$user_id' AND status = 'confirm'";
//         $query = mysqli_query($link, $sql);
//         $users = [];
//     if(mysqli_num_rows($query) == 1){
//         $row = mysqli_fetch_assoc($query);
//             extract($row);
//             $amount = floatval($amount);
//         return $amount;
//     }
    
//     if(mysqli_num_rows($query) > 0){
//         while ($row = mysqli_fetch_assoc($query)) {
//             extract($row);
//             $amount = floatval($amount);
//              $amount += $amount; 
//         }return $amount;
//     }

    
// }


// function update_invest($id, $order_id, $amount, $balance){
//     global $link;
//         $balance = floatval($balance);
//         $amount = floatval($amount);
//         $u = $balance + $amount;
//         $sql = "UPDATE users 
//         SET balance = '$u' WHERE id = '$id' ";
//         $query = mysqli_query($link, $sql);

//         $sql = "UPDATE deposit 
//         SET status = 'confirm' WHERE id = '$id' AND depo_id = '$order_id'";
//         $query = mysqli_query($link, $sql);
//         if ($query) {

//             // $subject = "Deposit Notification";
//             // require_once 'temp.php';
//             // $response = send_mail($email, $fullname, $subject, $body);

//             }
        
// }


// function update_invest_b($id, $order_id, $amount, $balance){
//     global $link;
//         $balance = floatval($balance);
//         $amount = floatval($amount);
//         $u = $balance - $amount;
//         $sql = "UPDATE users 
//         SET balance = '$u' WHERE id = '$id' ";
//         $query = mysqli_query($link, $sql);

//         $sql = "UPDATE deposit 
//         SET status = 'confirm' WHERE id = '$id' AND depo_id = '$order_id'";
//         $query = mysqli_query($link, $sql);
//         if ($query) {

//             // $subject = "Deposit Notification";
//             // require_once 'temp.php';
//             // $response = send_mail($email, $fullname, $subject, $body);

//             }
        
// }



// function auto_depo(){
//     global $link;
//     // extract($post);

//         $sql = "SELECT deposit.*, users.* FROM deposit INNER JOIN users ON deposit.id = users.id WHERE deposit.id = users.id AND deposit.status = 'pending'";
//         $query = mysqli_query($link, $sql);
//     $posts = [];
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             extract($row);
//             var_dump($amount);
//             $t = time();
//             if ($t > $depo_date) {
//             $ex_amount = floatval($ex_amount);
//             $balance = floatval($balance);
//             $balance = $ex_amount + $balance;
            
//             $sql = " UPDATE deposit SET status = 'confirm' WHERE depo_id = '$depo_id'";
//             $query = mysqli_query($link, $sql);

//             echo mysqli_error($link);

//             $sql = " UPDATE users SET balance = '$balance' WHERE id = '$id'";
//             $query = mysqli_query($link, $sql); 
//             }


//         }
//         return $posts;
//     } return false; 
// }

//         // $sql = " UPDATE history 
    
//         // SET trans_date = '$trans_date', trans_discrip ='$trans_discrip', amount= '$amount', currency='$currency'WHERE history_id = '$history_id'";

        

            
//         // echo mysqli_error($link);

//         // var_dump($query);

         
// // UPDATE history SET trans_date='$trans_date',trans_discrip='$trans_discrip',amount= 5,currency='$currency' WHERE user_id = 34


// // if ($err_flag === false) {

// //      $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
// //      $query = mysqli_query($link, $sql);
// //          if (mysqli_num_rows($query) > 0) {
// //              $row = mysqli_fetch_array($query);              
// //                  extract($row);
// //                  $_SESSION['24user_id'] = $id;
// //                  $_SESSION['status'] = $status;
// //          return true;
// //      }   else {
// //                  $errors['invalidl'] = "Invalid login details";
// //                  return $errors;
// //              }
// //  } return $errors;
// //}


// function fetch_t($trade_id){
//     global $link;
//    $sql = "SELECT * FROM trade  WHERE trade_id = '$trade_id'";
//         $query = mysqli_query($link, $sql);
//     $row = mysqli_fetch_assoc($query);
//     return $row;
//  } 


// function paid($trade_id){
//     global $link;
//     $t = fetch_t($trade_id);
//     extract($t);

//     if ($first === "first" || $first === "spaid") {
//         $sql = "UPDATE trade 
//         SET first = 'spaid' WHERE trade_id = '$trade_id' ";
//         $query = mysqli_query($link, $sql);
//     }

//     if ($second === "second" || $second === "bpaid") {
//         $sql = "UPDATE trade 
//         SET second = 'bpaid' WHERE trade_id = '$trade_id' ";
//         $query = mysqli_query($link, $sql);
//     }

//         if ($query) {
//             return true;

//             }
        
// }

