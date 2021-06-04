<?php
if(!empty($_POST)) {
	$email = getPost('email');
	$password = getPost('password');

	$password = getMD5Security($password);

	$sql = "select * from users where email = '$email' and password = '$password'";
	$result = executeResult($sql);
	if($result != null && sizeof($result) == 1) {
		$token = getMD5Security(time().$result[0]['email']);
		setcookie('token', $token, time() + 7*24*60*60, '/');

		$email = $result[0]['email'];
		$sql = "update users set token = '$token' where email = '$email'";
		execute($sql);

		header('Location: ../home.php');
		die();
	}
}