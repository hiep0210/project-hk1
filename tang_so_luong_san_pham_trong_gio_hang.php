<?php  

$ma_san_pham = $_GET['ma_san_pham'];

session_start();

$_SESSION['gio_hang'][$ma_san_pham]++;

header("location:xem_gio_hang.php");