<?php
session_start();
if (!isset($_GET['id'])) {
echo "<script>document.location.href = 'shop.php';</script>";
}
$_SESSION['cart'][$_GET['id']] = $_SESSION['cart'][$_GET['id']] + 1;
$serialize = serialize($_SESSION['cart']);
setcookie('cart', $serialize, time() + 3600);
echo "<script>document.location.href = 'shop.php';</script>";

?>
