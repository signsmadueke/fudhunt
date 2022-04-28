<?php 
ob_start();
session_start();

// define("HOST", "localhost");
// define("USERNAME", "aplusvgy_escrow2");
// define("PASSWORD", "aplusvgy_escrow2");
// define("DBNAME", "aplusvgy_escrow2");

// define("HOST", "localhost");
// define("USERNAME", "root");
// define("PASSWORD", "");
// define("DBNAME", "fudhunt");

define('HOST', 'localhost:8889');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'fudhunt');

$link = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
$conn = $link;

if ($link) {
    echo 'Connected to DATABASE';
} else {
    echo 'Failed to connect to DATABASE';
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





function add_food($post, $file){
	global $link;
	$errors = array();
	$err_flag = false;
	extract($post);	

	$image_path = upload_image($file, $errors);

	$sql = "INSERT INTO food (food_name, food_prize, cuisine_id, restaurant_id, food_pix ) VALUES ('$food_name', '$food_prize', '$cuisine_id', '$restaurant_id', '$image_path' )";
	
	$query = mysqli_query($link, $sql);

	var_dump($query);
	echo mysqli_error($link);

	// return true;
}

function add_cuisine($post, $file){
	global $link;
	$errors = array();
	$err_flag = false;
	extract($post);	
	$image_path = upload_image($file, $errors);

	$sql = "INSERT INTO cuisine(cuisine_name, cuisine_pix) VALUES ('$cuisine_name', '$image_path')";
	$query = mysqli_query($link, $sql);
	return true;
}

function add_restaurant($post, $file){
	global $link;
	$errors = array();
	$err_flag = false;
	extract($post);	
	$image_path = upload_image($file, $errors);

	$sql = "INSERT INTO restaurant (restaurant_name, restaurant_pix, restaurant_address) VALUES ('$restaurant_name', '$image_path', '$restaurant_address')";
	$query = mysqli_query($link, $sql);
	return true;
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



function fetch_food(){
	global $link;
	$sql = "SELECT * FROM food ";
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


function delete_restaurant($post){
	global $link;
	extract($post);
	$sql = "DELETE FROM restaurant WHERE restaurant_id = '$restaurant_id'";
	$query = mysqli_query($link, $sql);
	if ($query) {
			return true;
		}
}

function delete_cuisine($post){
	global $link;
	extract($post);
	$sql = "DELETE FROM cuisine WHERE cuisine_id = '$cuisine_id'";
	$query = mysqli_query($link, $sql);
	if ($query) {
			return true;
		}
}


	function fetch_single_restaurant($restaurant_id){
	global $link;
	$sql = "SELECT * FROM restaurant WHERE restaurant_id  = '$restaurant_id'";
		$query = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($query); 
	return $row;
}

	function fetch_single_cuisine($cuisine_id){
	global $link;
	$sql = "SELECT * FROM cuisine WHERE cuisine_id  = '$cuisine_id'";
		$query = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($query); 
	return $row;
}

function update_cuisine($post){
	global $link;
	extract($post);
	
	$sql = "UPDATE cuisine SET cuisine_name = '$cuisine_name' WHERE cuisine_id  = '$cuisine_id'";
		$query = mysqli_query($link, $sql);

		if ($query) {
			return true;
		}
}

function update_restaurant($post){
	global $link;
	extract($post);
	
	$sql = "UPDATE restaurant SET restaurant_name = '$restaurant_name' WHERE restaurant_id  = '$restaurant_id'";
		$query = mysqli_query($link, $sql);

		if ($query) {
			return true;
		}
}





// Define all helper functions

// function sanitize($input){
// 	global $link;
// 	$input = htmlentities(strip_tags(trim($input)));
// 	$input = mysqli_real_escape_string($link, $input);
// 	return $input;
// }

// function sanitize_email($email){
// 	global $link;
// 	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
// 	if ($email) {
// 		$email = mysqli_real_escape_string($link, $email);
// 		return $email;
// 	} return false;
// }





// function upload_image($file, &$errors){
// 	$size = $file['size'];
// 	$type = $file['type'];
// 	$tmp_location = $file['tmp_name'];

// 	if ($size > 5120000) {
// 		$errors[] = "Profile picture is too large.";
// 		return false;
// 	}

// 	$allowed_extensions = array("jpg", 'jpeg', 'png', 'gif');
// 	$file_ext = explode('/', $type);
// 	$image_ext = strtolower(end($file_ext));
// 	if (!in_array($image_ext, $allowed_extensions)) {
// 		$errors[] = "File type not allowed";
// 		return false;
// 	}

// 	$upload_dir = "uploads/";
// 	$image_name = hash("sha256", uniqid());
// 	$image_path = $upload_dir . $image_name . "." . $image_ext;

// 		//move_uploaded_file($tmp_location, $image_path);
	
// 	if (move_uploaded_file($tmp_location, $image_path)) {
		
// 	//echo "successful";
// 		return $image_path;
// 	} 

// 	$errors[] = "Sorry, image upload failed!";
// 	return false;
// }



// function check_duplicate($email){
// 	global $link;
// 	$sql = "SELECT email FROM users WHERE email = '$email'";
// 	$query = mysqli_query($link, $sql);
// 	if ($query) {
// 		if (mysqli_num_rows($query) > 0) {
// 			return true;
// 		} return false;
// 	} return false;
// }

// function format_post_date($date){
// 	$date = date("Y-m-d H:i:s", $date);
// 	return $date;
// }

// // Helper functions end here
// function login_user($post){
// 	global $link;
// 	$err_flag = false;
// 	$errors = [];

// 	if (!empty($post['username'])) {
// 		$tmp = sanitize($post['username']);
// 		if ($tmp) {
// 			$username = $tmp;
// 		} else {
// 			$err_flag = true;
// 			$errors[] = "Please enter a valid username address";
// 		}
// 	} else {
// 		$err_flag = true;
// 		$errors[] = "Please enter a username";
// 	}

// 	if (!empty($post['password'])) {
// 		$password = sanitize($post['password']);
// 	} else {
// 		$err_flag = true;
// 		$errors[] = "Please enter your password";
// 	}

// 	if ($err_flag === false) {

// 		$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
// 		$query = mysqli_query($link, $sql);
// 			if (mysqli_num_rows($query) > 0) {
// 				$row = mysqli_fetch_array($query);				
// 					$admin_id = $row['admin_id'];
// 					$username = $row['username'];
// 					$password = $row['password'];
					
// 					$_SESSION['admin_id'] = $admin_id;
// 					$_SESSION['username'] = $username;
// 					$_SESSION['password'] = $password;
// 			return true;
// 		}	else {
// 					$errors[] = "Invalid login details";
// 					return $errors;
// 				}
// 	} return $errors;
// }





// function fetch_users(){
// 	global $link;
// 	$sql = "SELECT * FROM users ORDER BY user_id DESC";
// 	$query = mysqli_query($link, $sql);
// 	$posts = [];
// 	if (mysqli_num_rows($query) > 0) {
// 		while ($row = mysqli_fetch_assoc($query)) {
// 			$posts[] = $row;
// 		}
// 		return $posts;
// 	} return false;
// }

// function fetch_history($user_id){
// 	global $link;
// 	//$sql = "SELECT * FROM history ORDER BY user_id DESC WHERE user_id = '$user_id'";
// 	$sql = "SELECT * FROM history WHERE user_id = '$user_id'";
// 	$query = mysqli_query($link, $sql);
// 	$posts = [];

// 	if (mysqli_num_rows($query) > 0) {
// 		while ($row = mysqli_fetch_assoc($query)) {
// 			$posts[] = $row;
// 		}
// 		return $posts;
// 	} return false;


// }

// function fetch_single_history($history_id){
// 	global $link;
// 	//$sql = "SELECT * FROM history ORDER BY user_id DESC WHERE user_id = '$user_id'";
// 	$sql = "SELECT * FROM history WHERE history_id = '$history_id'";
// 	$query = mysqli_query($link, $sql);
// 	$row = mysqli_fetch_assoc($query); 
// 	return $row;
	
	
// }


// function fetch_single_plan($plan_id){
// 	global $link;
// 	$sql = "SELECT * FROM plan WHERE plan_id = '$plan_id'";
// 	$query = mysqli_query($link, $sql);
// 	$row = mysqli_fetch_assoc($query); 
// 	return $row;
	
	
// }




// function total_users(){

// 	global $link;
// 	$sql = "SELECT * FROM users";
// 	$query = mysqli_query($link, $sql);
// 	if(mysqli_num_rows($query) > 0){
// 		$num = mysqli_num_rows($query);
// 		return $num;
// 	} else{
// 		return false;
// 	}

// }


// function register_user($post, $file){
// 	global $link;
// 	$errors = array();
// 	$err_flag = false;

// 	//firstname
// 	if (!empty($post['firstname'])) {
// 		$firstname = sanitize($post['firstname']);
// 	} else {
// 		$errors['firstname'] = "Enter your first name";
// 		$err_flag = true;
// 	}

// 	//surname
// 	if (!empty($post['surname'])) {
// 		$surname = sanitize($post['surname']);
// 	} else {
// 		$errors['surname'] = "Enter your surname";
// 		$err_flag = true;
// 	}

// 	//country
// 	if (!empty($post['country'])) {
// 		$country = sanitize($post['country']);
// 	} else {
// 		$err_flag = true;
// 		$errors['country'] = "Please select your country";
// 	}

// 	//state
// 	if (!empty($post['state'])) {
// 		$state = sanitize($post['state']);
// 	} else {
// 		$err_flag = true;
// 		$errors['state'] = "Please select your state";
// 	}
	
// 	//block chain
// 	if (!empty($post['block_chain'])) {
// 		$block_chain = sanitize($post['block_chain']);
// 	} else {
// 		$err_flag = true;
// 		$errors['block_chain'] = "Please select your block chain";
// 	}

// 	//email
// 	if (!empty($post['email'])) {
// 		$email_tmp = sanitize($post['email']);
// 		if (!check_duplicate($email_tmp)) {
// 			$email = $email_tmp;
// 		} else {
// 			$err_flag = true;
// 			$errors['email'] = "This email has already been used!";
// 		}
// 	} else {
// 		$err_flag = true;
// 		$errors['email'] = "Enter your email";
// 	}


// 	// if (!empty($post['role'])) {
// 	// 	$role = sanitize($post['role']);
// 	// } else {
// 	// 	$role = 0;
// 	// }

// 	//phone number
// 	if (!empty($post['phone_number'])) {
// 		$phone_number = sanitize($post['phone_number']);
// 	} else {
// 		$errors['phone_number'] = "Enter a phone number";
// 		$err_flag = true;
// 	}

// 	//gender
// 	if (!empty($post['gender'])) {
// 		$gender = sanitize($post['gender']);
// 	} else {
// 		$errors['gender'] = "Enter a gender";
// 		$err_flag = true;
// 	}

// 	//dob
// 	if (isset($post['accept'])) {
// 		$accept = sanitize($post['accept']);
// 	} else {
// 		$errors['accept'] = "Please accept our terms and conditions";
// 		$err_flag = true;
// 	}

// 	$dob = "none";

// 	//profile_pic
// 	if (!empty($file)) {
// 		$image_path = upload_image($file, $errors);
// 		if (!$image_path) {
// 			$err_flag = true;
// 		}
// 	} else {
// 		$errors['file'] = "Please select a profile picture";
// 		$err_flag = true;
// 	}
// 	//password
// 	if (!empty($post['password1'])) {
// 		$password1 = sanitize($post['password1']);
// 	} else {
// 		$errors['password1'] = "Enter your password";
// 		$err_flag = true;
// 	}

// 	if (!empty($post['password2'])) {
// 		$password2 = sanitize($post['password2']);
// 	} else {
// 		$errors['password2'] = "Confirm your password";
// 		$err_flag = true;
// 	}

// 	if (isset($password1) && isset($password2)) {
// 		if ($password1 == $password2) {
// 			$password = password_hash($password2, PASSWORD_DEFAULT);
// 		} else {
// 			$errors['password'] = "Passwords do not match";
// 			$err_flag = true;
// 		}
// 	}
// 	$admin_role = 0;


// 	if ($err_flag === false) {
// 		$sql = "INSERT INTO users (firstname, surname, email, phone_number, gender, country, state, block_chain, password, dob, profile_pic_path,admin) VALUES ('$firstname', '$surname', '$email', '$phone_number', '$gender', '$country', '$state', '$block_chain', '$password', '$dob', '$image_path','$admin_role')";
// 		$query = mysqli_query($link, $sql);
		
// 		//if query is successful
// 		if ($query) {
// 			$subject = "Welcome to Fargo Mine";
// 			$body = get_email_template("email_template.php", $firstname, $email);
// 			$response = send_mail($email, $firstname, $subject, $body);

// 			if ($response) {
// 					return true;
// 			} else {
// 				$errors[] = "Ooops!!! Something went wrong. (Email)";
// 				return $errors;
// 			}
// 		} else {
// 			$errors[] = "Could not insert into database " . mysqli_error($link);
// 			return $errors;
// 		}
// 	} return $errors;

// }


// function fetch_useri($user_id = null){
// 	global $link;
// 	$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
// 		$query = mysqli_query($link, $sql);
// 		$users = [];
// 	if(mysqli_num_rows($query) > 0){
// 		while ($row = mysqli_fetch_assoc($query)) {
// 			$users[] = $row; 
// 		}return $users;
// 	}return $users;
// }


// function fetch_cry($fund_id){
// 	global $link;
// 	$sql = "SELECT * FROM fund WHERE fund_id = '$fund_id'";
// 	$query = mysqli_query($link, $sql);
// 	$row = mysqli_fetch_assoc($query); 
// 	return $row;
// }

// function fetch_user($user_id){
// 	global $link;
// 	$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
// 	$query = mysqli_query($link, $sql);
// 	$row = mysqli_fetch_assoc($query); 
// 	return $row;
// }


// function fetch_single($user_id, $txType){
// 	global $link;
	
// 	$sql = "SELECT users.*, tx.* FROM users INNER JOIN tx ON users.user_id = tx.user_id WHERE users.user_id = '$user_id' AND tx.txType = '$txType'";
// 	//$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
// 		$query = mysqli_query($link, $sql);
// 		$users = [];
// 	if(mysqli_num_rows($query) > 0){
// 		while ($row = mysqli_fetch_assoc($query)) {
// 			$users[] = $row; 
// 		}return $users;
// 	}return $users;
// }



// // function fetch_withdraw($user_id){
// // 	global $link;
	
// // 	$sql = "SELECT users.*, tx.* FROM users INNER JOIN tx ON users.user_id = tx.user_id WHERE users.user_id = $user_id";
// // 		$query = mysqli_query($link, $sql);
// // 		$users = [];
// // 	if(mysqli_num_rows($query) > 0){
// // 		while ($row = mysqli_fetch_assoc($query)) {
// // 			$users[] = $row; 
// // 		}return $users;
// // 	}return $users;
// // }


// function list_approve($tx_id, $txType){
// 	global $link;
	
// 	$sql = "SELECT users.*, tx.* FROM users INNER JOIN tx ON users.user_id = tx.user_id WHERE tx.tx_id = '$tx_id' ";

// 		$query = mysqli_query($link, $sql);
// 		var_dump($query);
// 	if(mysqli_num_rows($query) > 0){
// 		$row = mysqli_fetch_assoc($query);
		
// 		}

// 		return $row;

// }


// function list_wapprove($withdraw_id){
// 	global $link;
	
// 	$sql = "SELECT users.*, withdraw.* FROM users INNER JOIN withdraw ON users.user_id = withdraw.user_id WHERE withdraw.withdraw_id = $withdraw_id";
// 	//$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
// 		$query = mysqli_query($link, $sql);
// 		//$users = [];
// 	if(mysqli_num_rows($query) > 0){
// 		$row = mysqli_fetch_assoc($query);
// 		}
// 		return $row;
// }

// function upbalance($post){
// 	global $link;
// 	extract($post);
// 		//$amount = intval($amount);
		
// 		$sql = " UPDATE users SET balance = '$balance' WHERE user_id = '$user_id'";
// 		$query = mysqli_query($link, $sql);
// 		if ($query) {
// 			return true;
// 		}

	

// }




// function admin_bt($post){
// 	global $link;
// 	extract($post);
// 		//$amount = intval($amount);
		
// 		$sql = " UPDATE admin SET admin_btc = '$admin_btc'";
// 		$query = mysqli_query($link, $sql);
// 		if ($query) {
// 			return true;
// 		}

	
// }


// function admin_et($post){
// 	global $link;
// 	extract($post);
// 		//$amount = intval($amount);
		
// 		$sql = " UPDATE admin SET admin_eth = '$admin_eth'";
// 		$query = mysqli_query($link, $sql);
// 		if ($query) {
// 			return true;
// 		}

	
// }



// function update_plan($plan_id, $post){
// 	global $link;
// 	extract($post);
// 		//$amount = intval($amount);
// 		$sql = " UPDATE plan 
// 		SET plan_name = '$plan_name', roi ='$roi', max= '$max', min='$min' , duration='$duration'WHERE plan_id = '$plan_id'";
// 		$query = mysqli_query($link, $sql);
// 		if ($query) {
// 			return true;
// 		}




// // UPDATE history SET trans_date='$trans_date',trans_discrip='$trans_discrip',amount= 5,currency='$currency' WHERE user_id = 34

// }


// function update_history($post, $history_id){
// 	global $link;
// 	extract($post);
// 		//$amount = intval($amount);
		
// 		$sql = " UPDATE history 
	
// 		SET trans_date = '$trans_date', trans_discrip ='$trans_discrip', amount= '$amount', currency='$currency'WHERE history_id = '$history_id'";
// 		$query = mysqli_query($link, $sql);

			
// 		// echo mysqli_error($link);

// 		// var_dump($query);

		 
// // UPDATE history SET trans_date='$trans_date',trans_discrip='$trans_discrip',amount= 5,currency='$currency' WHERE user_id = 34

// }


// function update_user($post){
// 	global $link;
// 	extract($post);


// 		$sql = "UPDATE users 
// 		SET title='$title',username='$username',surname='$surname',firstname='$firstname',lastname='$lastname',email='$email',phone='$phone',gender='$gender',address='$address',state='$state',country='$country',dob='$dob',password='$password', access_code = '$access_code'
// 		WHERE user_id ='$user_id'";
// 		$query = mysqli_query($link, $sql);


// 		$sql = "UPDATE transactions 
// 		SET 
// 		account_number='$account_number',
// 		account_type='$account_type',
// 		currency='$currency',
// 		account_status='$account_status',
// 		currency_sym='$currency_sym',
// 		balance='$balance',
// 		next_kin='$next_kin',
// 		acc_officer='$acc_officer',
// 		transfer='$transfer',
// 		cot='$cot',
// 		imf='$imf'
// 		WHERE user_id ='$user_id'";
// 		$query = mysqli_query($link, $sql);


// }




// function update_pic($post, $file){
// 	global $link;
// 	extract($post);

// 		// if (!empty($picture)) {
// 		// 	$newPics = $picture;
// 		// }
// 		$image_path = upload_image($file, $errors);
		
	
	
// 		$sql = "UPDATE users 
// 		SET profile_pic_path='$image_path'
// 		WHERE user_id ='$user_id'";
// 		$query = mysqli_query($link, $sql);




// }





// function add_history($post){
// 	global $link;
// 	$errors = array();
// 	$err_flag = false;
// 	extract($post);	
	
// 	$sql = "INSERT INTO history(user_id, trans_date, trans_discrip, amount, currency) VALUES ('$user_id', '$trans_date','$trans_discrip', '$amount', '$currency')";

// 	$query = mysqli_query($link, $sql);

// 		if ($query) {
// 			return true;
// 		}else{
// 			$errors[] = "Could not update database " . mysqli_error($link);
// 			return $errors;
// 		}
			
// 	}//return $errors;



// function add_user($post, $file){
// 	global $link;
// 	$errors = array();
// 	$err_flag = false;
// 	extract($post);	

	
// 	$image_path = upload_image($file, $errors);
	
// 	$sql = "INSERT INTO users(title, surname, firstname, lastname, email, phone, gender, address, country, state, password, dob, username, profile_pic_path) VALUES ('$title', '$surname','$firstname','$lastname', '$email', '$phone', '$gender', '$address', '$country', '$state', '$password', '$dob', '$username','$image_path')";

// 	$query = mysqli_query($link, $sql);

// 	var_dump($query);

	
// 	$id = mysqli_insert_id($link);
	
// 		$sql = "INSERT INTO bene(user_id, bene_name, bene_acct_no) VALUES('$id', 'Andrew Green','1983765432')"; 
// 		$query = mysqli_query($link, $sql); 

// 		$sql = "INSERT INTO history(user_id, trans_date, trans_discrip, amount, currency) VALUES('$id', '2019-07-21 06:42:21am','ATM Withdrawal', '215','o')"; 
// 		$query = mysqli_query($link, $sql); 	


// 	$sql = "INSERT INTO transactions(user_id, account_number, account_type, currency, account_status, currency_sym, balance, token, next_kin, acc_officer) VALUES('$id', '$account_number','$account_type', '$currency', '$account_status', '$currency_sym', '$balance', '$token', '$next_kin', '$acc_officer')"; 

// 		$query = mysqli_query($link, $sql); 

// 		if ($query) {
// 			return true;
// 		}else{
// 			$errors[] = "Could not update database " . mysqli_error($link);
// 			return $errors;
// 		}
			
// 	}//return $errors;



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

//         if (!empty($post['cpassword'])) {
//         $cpassword = sanitize($post['cpassword']);
    
//     } else {
//         $errors['cpassword'] = "confirm new password";
//         $err_flag = true;
//     }

//     if ($cpassword != $password) {
//         $errors['mismatch'] = "mis match password.";
//         $err_flag = true;

//     }

//     if ($err_flag === false) {
//         $sql = "UPDATE admin 
//         SET password='$password'";

//         $query = mysqli_query($link, $sql);
//         if ($query) {
//             return true;
//         } else {
//             $errors['error'] = "Error entering question please Try again" . mysqli_error($link);
//             return $errors;
            
//         }
//     }  return $errors;


// }

// function approve_user($post){
// 	global $link;
// 	$errors = array();
// 	$err_flag = false;
// 	extract($post);
// 	$invest_status = "confirmed";

// 	$sql = "UPDATE invest 
// 		SET invest_status='$invest_status'

// 		WHERE invest_id ='$invest_id'";
// 		$query = mysqli_query($link, $sql);

// 		// var_dump($query);
// 		echo mysqli_error($link);
// 	$balance = intval($balance);
// 	// var_dump($invest_amount);
// 	$invest_amount = intval($invest_amount);
// 	$balance = $balance + $invest_amount;




// 	$sql = "UPDATE users 
// 		SET balance='$balance'

// 		WHERE user_id ='$user_id'";
// 		$query = mysqli_query($link, $sql);	
			
// }//return $errors;


// function wapprove_user($post){
// 	global $link;
// 	$errors = array();
// 	$err_flag = false;
// 	extract($post);

// 	$status = "confirmed";

	

// 	$sql = "UPDATE withdraw 
// 		SET with_status='$status'

// 		WHERE withdraw_id ='$withdraw_id'";
// 		$query = mysqli_query($link, $sql);

// 		// echo mysqli_error($link);

// 			// var_dump($query);


// 		// var_dump($query);
// 	// 	echo mysqli_error($link);
// 	// $balance = intval($balance);
// 	// // var_dump($invest_amount);
// 	// $ex_invest = intval($ex_invest);
// 	// $balance = $balance + $invest_amount;




// 	// $sql = "UPDATE users 
// 	// 	SET balance='$balance'

// 	// 	WHERE user_id ='$user_id'";
// 	// 	$query = mysqli_query($link, $sql);



		
// 	// 	$query = mysqli_query($link, $sql);
	
	
			
// }//return $errors;


// function admin_wallet(){
// 	global $link;
// 	$sql = "SELECT * FROM admin";
// 	$query = mysqli_query($link, $sql);
// 		$row = mysqli_fetch_assoc($query);
// 		return $row;
// 	}


// function fetch_plan(){
// 	global $link;
// 	$sql = "SELECT * FROM plan ";
// 	$query = mysqli_query($link, $sql);
// 	$posts = [];
// 	if (mysqli_num_rows($query) > 0) {
// 		while ($row = mysqli_fetch_assoc($query)) {
// 			$posts[] = $row;
// 		}
// 		return $posts;
// 	} return false;
// }

// function list_plan(){
// 	global $link;
// 	$sql = "SELECT * FROM plan ";
// 	$query = mysqli_query($link, $sql);
// 		$row = mysqli_fetch_assoc($query);
// 		return $row;
// 	}

// 	function edit_plan($post){
// 		global $link;
// 		extract($post);

// 	$sql = "UPDATE plan 
// 		SET plan_name='$plan_name', roi='$roi', max='$max', min='$min', duration='$duration'
		

// 		WHERE plan_id ='$plan_id'";


// 		$query = mysqli_query($link, $sql);

// 		echo mysqli_error($link);

// 	}

// function add_crypto($post){
// 	global $link;
// 	$errors = array();
// 	$err_flag = false;
// 	extract($post);	



	
// 	$sql = "INSERT INTO coin(coin_name, coin_wallet) VALUES ('$coin_name', '$coin_wallet')";

// 	$query = mysqli_query($link, $sql);
// 	echo mysqli_error($link);
// 	return true;
// }


// function fetch_trade($trade_id){
// 	global $link;
// 	$sql = "SELECT * FROM trade WHERE trade_id = '$trade_id'";
// 			$query = mysqli_query($link, $sql);
// 			$row = mysqli_fetch_array($query);
// 			return $row;
// 	}
	



// function actioni($post){
// 	global $link;
// 	$errors = array();
// 	$err_flag = false;
// 	extract($post);	



// 	if ($action === "confirm") {
	
		
// 		$sql = " UPDATE trade SET bpayment_status = 'bpaid' WHERE trade_id = '$trade_id'";
// 		$query = mysqli_query($link, $sql);

// 		$sql = " UPDATE crypto SET tx_status = 'bpaid' WHERE crypto_id = '$crypto_id'";
// 		$query = mysqli_query($link, $sql);
// 		}

	

// 	if ($action === "delete") {
// 		$sql = "DELETE FROM crypto WHERE crypto_id = '$crypto_id'";
// 		$query = mysqli_query($link,$sql);
// 		if ($query) {
// 			return true;
// 		}
// 	}

// 	if ($action === "decline") {
// 		$sql = "UPDATE crypto SET tx_status = 'decline' WHERE crypto_id = '$crypto_id'";
// 		$query = mysqli_query($link, $sql);
// 		if ($query) {
// 			return true;
// 		}
// 	}


// }



// function action($post){
// 	global $link;
// 	$errors = array();
// 	$err_flag = false;
// 	extract($post);	



// 	if ($action === "confirm") {
	
		
// 		$sql = " UPDATE fund SET usd_amount = '$temp_amount', tx_status = 'paid' WHERE fund_id = '$fund_id'";
// 		$query = mysqli_query($link, $sql);

// 		// $sql = " UPDATE crypto SET tx_status = 'spaid' WHERE crypto_id = '$crypto_id'";
// 		// $query = mysqli_query($link, $sql);
// 		 }

// 		 echo mysqli_error($link);
		

// 	if ($action === "delete") {
// 		$sql = "DELETE FROM fund WHERE fund_id = '$fund_id'";
// 		$query = mysqli_query($link,$sql);
// 		if ($query) {
// 			return true;
// 		}
// 	}
	

// 	if ($action === "decline") {
// 		$sql = "UPDATE fund SET tx_status = 'decline' WHERE fund_id = '$fund_id'";
// 		$query = mysqli_query($link, $sql);
// 		if ($query) {
// 			return true;
// 		}
// 	}


// }



// 	function fetch_escrow($user_id){
// 	global $link;

// 	$sql = "SELECT tradefirst.*, tradesecond.* FROM tradefirst INNER JOIN tradesecond ON tradefirst.tradefirst_id = tradesecond.tradefirst_id WHERE tradefirst.user_id  = '$user_id'";
// 			$query = mysqli_query($link, $sql);
// 		$users = [];
// 	if(mysqli_num_rows($query) > 0){
// 		while ($row = mysqli_fetch_assoc($query)) {
// 			$users[] = $row; 
// 		}return $users;
// 	}return $users;
// }

// function fetch_funds($user_id){
// 	global $link;

// 	$sql = "SELECT * FROM fund WHERE user_id = '$user_id'";
// 			$query = mysqli_query($link, $sql);
// 		$users = [];
// 	if(mysqli_num_rows($query) > 0){
// 		while ($row = mysqli_fetch_assoc($query)) {
// 			$users[] = $row; 
// 		}return $users;
// 	}return $users;
// }


// function fetch_with($user_id){
// 	global $link;
// 	$sql = "SELECT * FROM withdrawal WHERE user_id = '$user_id'";
// 			$query = mysqli_query($link, $sql);
// 		$users = [];
// 	if(mysqli_num_rows($query) > 0){
// 		while ($row = mysqli_fetch_assoc($query)) {
// 			$users[] = $row; 
// 		}return $users;
// 	}return $users;
// }