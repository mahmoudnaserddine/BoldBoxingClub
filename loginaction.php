<?php
session_start();
$error = '';
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	} else {
		$username = $_POST['username'];
		$password = $_POST['password'];
		setcookie($username, $password, time() + (86400 * 30), "/");

		$username = stripslashes($username);
		$password = stripslashes($password);
		$con = mysqli_connect("localhost", "root", "", "boldclub");
		$sql = "SELECT users.password, users.username, users.roleid FROM users WHERE password = '$password' AND username = '$username'";
		$result = mysqli_query($con, $sql);
		$rows = mysqli_num_rows($result);
		if ($rows == 1) {
			$res = mysqli_fetch_array($result);

			$_SESSION['login_user'] = $res['username'];
			$_SESSION['role'] = ($res['roleid'] == 1) ? "admin" : "user";

			if ($_SESSION['role'] == "admin") {
				header("Location: admin.php");
				exit();
			} else if ($_SESSION['role'] == "user") {
				header("Location: mainpage.php");
				exit();
			}
		} else {
			$error = "Username or Password is invalid";
		}
		mysqli_close($con);
	}
}
?>