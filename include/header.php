<?php
require 'include/function4user.php';
if (isset($_SESSION['user_id'])) {
	 $user_id = $_SESSION['user_id'];  
  $result = fetch_user($user_id);
   extract($result);

// var_dump($result); 

}

		//var_dump($user_id);
?>

