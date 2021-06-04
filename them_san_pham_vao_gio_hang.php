<?php  

$ma_san_pham = $_GET['ma_san_pham'];

session_start();

if (isset($_SESSION['gio_hang'][$ma_san_pham])) {
	$_SESSION['gio_hang'][$ma_san_pham]++;
}
else{
	$_SESSION['gio_hang'][$ma_san_pham] = 1;
}

	header("location:../../trang_chu/trang_chu.php");
