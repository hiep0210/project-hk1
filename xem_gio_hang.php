<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (!empty($_SESSION['gio_hang'])){
		include '../connect.php';
		$tong = 0;
	 ?>
	
	 <table border="1" width="100%">
	 	<tr>
	 		<th>Tên</th>
	 		<th>Ảnh</th>
	 		<th>Số Lượng</th>
	 		<th>Giá</th>
	 		<th>Tổng Tiền</th>
	 		<th>Xóa</th>
	 	</tr>
	 	<?php foreach ($_SESSION['gio_hang'] as $ma_san_pham => $so_luong): ?>
	 		<?php 
	 			$sql = "select * from san_pham where ma = '$ma_san_pham'";
	 			$result =mysqli_query($connect,$sql);
	 			$each = mysqli_fetch_array($result);
	 			$thu_muc_anh = '../anh/';
	 		 ?>
	 		<tr>
	 			<td>
	 				<?php echo $each['ten'] ?>
	 			</td>
	 			<td>
	 				<img width="150px" height="150px" src="<?php echo $thu_muc_anh . $each['anh'] ?>"> 
	 			</td>
	 			<td>
	 				<a href="giam_so_luong_san_pham_trong_gio_hang.php?ma_san_pham=<?php echo$ma_san_pham ?>">
	 					-
	 				</a>
	 				<?php echo $so_luong ?>
	 				<a href="tang_so_luong_san_pham_trong_gio_hang.php?ma_san_pham=<?php echo$ma_san_pham ?>">
	 					+
	 				</a>
	 			</td>
	 			<td>
	 				<?php echo $each['gia'] ?> $
	 			</td>
	 			<td>
	 				<?php echo $each['gia'] * $so_luong ?> $
	 				<?php $tong += $each['gia'] * $so_luong ?> 
	 			</td>
	 			<td>
	 				<a style="color: red" href="xoa_san_pham_trong_gio_hang.php?ma_san_pham=<?php echo$ma_san_pham ?>">
	 					Xoá
	 				</a>
	 			</td>
	 		</tr>
	 	<?php endforeach ?>
	 </table>
	 <h1>
	 	Tổng Số Tiền Là: <?php echo $tong ?> $
	 </h1>
	 		<button>
	 			<h1>
	 				<a href="../admin/quan_ly_hoa_don/hoa_don.php">
	 					Đặt Mua
	 				</a>
	 			</h1>			
	 		</button>
	<?php } else { ?>
	 	<h1>Chưa Có Đồ</h1>
	 	<a href="../trang_chu/trang_chu.php">
	 		Vào Đây Mua Đồ Đi
	 	</a>
	 <?php } ?>
</html>