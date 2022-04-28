<?php
session_start();
$food_id  = $_GET['food_id'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
array_push($_SESSION['cart'], $food_id);
header('Location: ' . $_SERVER['HTTP_REFERER']);

	// var_dump($_SESSION['cart']);
