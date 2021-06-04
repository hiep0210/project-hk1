<!DOCTYPE html>
<html>
<head>
	<title>Đăng Kí Tài Khoản</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			padding: 0px;
			margin: 0px;
			background-image: url("https://png.pngtree.com/png-vector/20200317/ourlarge/pngtree-cartoon-blue-power-gym-common-fitness-equipment-set-illustration-png-image_2162020.jpg");
		}

		.container {
			width: 60%;
			margin: 110px auto;
		}

		fieldset {
			margin-bottom: 20px;
			background-color: #71c6eb;
			padding: 35px;
		}

		fieldset legend {
			color: blue;
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

		.form-group input {
			width: 70%;
			float: left;
		}
	</style>
</head>
<body>
      <div class="container">
		<fieldset>
			<legend><h1>REGISTRATION</h1></legend>
			<div class="form-group">
				<label>Full Name</label>
				<input required="true" type="text" name="fullname" pattern="[\w]* [\w]*">
			</div>
			<div class="form-group">
				<label>Date of Birth (mm/dd/yyyy):</label>
				<input required="true" type="date" name="birthday">
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input required="true" type="telno" name="phone_number" pattern="[\w]{10,}">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input required="true" type="text" name="address">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input required="true" type="text" name="email">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input required="true" type="password" name="password">
			</div>
			<button>REGISTRATION</button>
		</fieldset>
</body>
</html>