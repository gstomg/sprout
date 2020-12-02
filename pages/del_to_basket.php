<?php 

session_start();

session_destroy();
unset($_COOKIE['cart']);

$_SESSION['cart'][$_GET['id']] = $_SESSION['cart'][$_GET['id']] + 1;
$serialize = serialize($_SESSION['cart']);
setcookie('cart', $serialize, time() - 3600);
header('location: basket.php');
?>