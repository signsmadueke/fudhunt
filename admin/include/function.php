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





function add_food($post, $file)
{
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

function add_cuisine($post, $file)
{
	global $link;
	$errors = array();
	$err_flag = false;
	extract($post);
	$image_path = upload_image($file, $errors);

	$sql = "INSERT INTO cuisine(cuisine_name, cuisine_pix) VALUES ('$cuisine_name', '$image_path')";
	$query = mysqli_query($link, $sql);
	return true;
}

function add_restaurant($post, $file)
{
	global $link;
	$errors = array();
	$err_flag = false;
	extract($post);
	$image_path = upload_image($file, $errors);

	$sql = "INSERT INTO restaurant (restaurant_name, restaurant_pix, restaurant_address) VALUES ('$restaurant_name', '$image_path', '$restaurant_address')";
	$query = mysqli_query($link, $sql);
	return true;
}

function fetch_cuisine()
{
	global $link;
	$sql = "SELECT * FROM cuisine ";
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
	$sql = "SELECT * FROM food ";
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
	$sql = "SELECT * FROM restaurant ";
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


function delete_restaurant($post)
{
	global $link;
	extract($post);
	$sql = "DELETE FROM restaurant WHERE restaurant_id = '$restaurant_id'";
	$query = mysqli_query($link, $sql);
	if ($query) {
		return true;
	}
}

function delete_cuisine($post)
{
	global $link;
	extract($post);
	$sql = "DELETE FROM cuisine WHERE cuisine_id = '$cuisine_id'";
	$query = mysqli_query($link, $sql);
	if ($query) {
		return true;
	}
}


function fetch_single_restaurant($restaurant_id)
{
	global $link;
	$sql = "SELECT * FROM restaurant WHERE restaurant_id  = '$restaurant_id'";
	$query = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($query);
	return $row;
}

function fetch_single_cuisine($cuisine_id)
{
	global $link;
	$sql = "SELECT * FROM cuisine WHERE cuisine_id  = '$cuisine_id'";
	$query = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($query);
	return $row;
}

function update_cuisine($post)
{
	global $link;
	extract($post);

	$sql = "UPDATE cuisine SET cuisine_name = '$cuisine_name' WHERE cuisine_id  = '$cuisine_id'";
	$query = mysqli_query($link, $sql);

	if ($query) {
		return true;
	}
}

function update_restaurant($post)
{
	global $link;
	extract($post);

	$sql = "UPDATE restaurant SET restaurant_name = '$restaurant_name' WHERE restaurant_id  = '$restaurant_id'";
	$query = mysqli_query($link, $sql);

	if ($query) {
		return true;
	}
}
