<?php
$username = $email = $password = '';
if(!empty($_POST)) {
	$username = getPost('username');
	$email = getPost('email');
	$password = getPost('password');

	if(!empty($password) && !empty($email)) {
		$sql = "select * from users where email = '$email'";
		$result = executeResult($sql);
		if($result != null && sizeof($result) > 0) {
		} else {
			$password = getMD5Security($password);

			$sql = "insert into users(email, username, password) values ('$email', '$username', '$password')";
			execute($sql);

			header('Location: login.php');
			die();
		}
	}
}