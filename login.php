<?php
require_once('../db/dbhelper.php');
require_once('../utils/utility.php');
require_once("form-login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập Tài Khoản</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			background-image: url(https://s1.img.yan.vn//YanNews/2167221/201311/20131111-0100-10-mau-nguoi-ban-de-dang-tim-thay-trong-phong-tap-gym-7);
			padding: 0px;
			margin: 0px;
		}

		.container {
			width: 50%;
			margin: 160px auto;
		}
		 fieldset {
			margin-bottom: 20px;
			background-color: #71c6eb;
			padding: 30px;
		}

		fieldset legend {
			color: #0c1a96;
			font-weight: bold;
		}

		.form-group {
			width: 100%;
			display: flex;
			margin-bottom: 10px;
		}

		.form-group label {
			width: 20%;
			float: left;
		}

		.form-group input  {
			width: 70%;
			float: left;
		}
       
	</style>
</head>
<body>
     <div class="container">
		<fieldset>
			<legend><h1>LOGIN</h1></legend>
            <form method="post">
			<div class="form-group">
				<label>Email</label>
				<input required="true" type="text" id="email" name="email" >
			</div>
			<div class="form-group">
				<label>Password</label>
				<input required="true" type="password" id="password" name="password">
			</div>
			<div class="form-group">
                <label></label> 
			    <button>LOGIN</button>
		    </div>
		    <div class="link"><a href="registration.php">Đăng kí tại đây</a></div>
		    </form>
		</fieldset>	
	</div>	
</body>
</html>