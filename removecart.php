<?php
session_start();
$food_id  = $_GET['food_id'];


foreach ($_SESSION["cart"] as $k) {
   session_unset($_SESSION["cart"][$food_id]);

   if (empty($_SESSION["cart"]))

      session_unset($_SESSION["cart"]);
}



var_dump($_SESSION['cart']['1']);

var_dump($_SESSION['cart']);
   //  array_push($_SESSION['cart'], $food_id);
   // header('Location: ' . $_SERVER['HTTP_REFERER']);

	// var_dump($_SESSION['cart']);
