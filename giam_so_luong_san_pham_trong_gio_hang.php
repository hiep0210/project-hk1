<?php  

$ma_san_pham = $_GET['ma_san_pham'];

session_start();

if ($_SESSION['gio_hang'][$ma_san_pham] > 1) {
	$_SESSION['gio_hang'][$ma_san_pham]--;
}
else{
	unset($_SESSION['gio_hang'][$ma_san_pham]);
}


header("location:xem_gio_hang.php");