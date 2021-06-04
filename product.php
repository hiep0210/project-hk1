<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<ul class="list-group">
		    <li class="list-group-item active">Đăng Kí Tài Khoản</li>
		    <li class="list-group-item">
		   		<form method="post" action="welcome.php">
					<div class="form-group">
						<label for="usr">User Name</label>
						<input type="text" class="form-control" id="usr" name="username">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="pwd">Password</label>
						<input type="password" class="form-control" id="pwd" name="password">
					</div>
				    <button type="submit" class="btn btn-success">Register</button>
			  </form>
		    </li>
		  </ul>
	</div>
<?php
$name = $email = $pwd = '';
if (!empty($_POST)) {
    if (isset($_POST['username'])) {
        $name = $_POST['username'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['password'])) {
        $pwd = $_POST['password'];
    }
    // if ($name!=null&&$email!= null& $pwd!= null) {
    //     header('Location: welcome.php?username='.$name.'&email='.$email.'&password='.$pwd);
    // }
	}
?>
</body>
</html>