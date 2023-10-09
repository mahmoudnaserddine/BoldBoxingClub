<?php
session_start();
if ( isset ($_POST["regfn"]) && isset($_POST["regname"]) && isset($_POST["regdob"]) && isset($_POST["regpn"]) && isset($_POST["regpass1"]) && isset($_POST["regpass2"])) {
	if ($_POST["regpass1"] == $_POST["regpass2"]) {
		$servername = "localhost";
		$username = "root";
		$conn = mysqli_connect($servername, $username, "", "bbc") or die(mysql_error());
        
		$FullName =  mysqli_real_escape_string($conn, $_POST["regfn"]);
		$username = mysqli_real_escape_string($conn, $_POST["regname"]);
		$dob = mysqli_real_escape_string($conn, $_POST["regdob"]);
		$phone_number = mysqli_real_escape_string($conn, $_POST["regpn"]);
		$password = mysqli_real_escape_string($conn, $_POST["regpass1"]);
		$roleid = 2;

		$sql = "INSERT INTO users (FullName, username, date_of_birth, phone_number, password, roleid) VALUES ('$FullName', '$username', '$dob', '$phone_number', '$password', '$roleid')";
		$result = mysqli_query($conn, $sql) or die(mysql_error());

		if ($result) {
			$_SESSION['login_user'] = $username;
			$_SESSION['role'] = "user";

			header("Location: login.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	} else {
		echo "Passwords don't match";
	}
} else {
	echo "Invalid input data";
}
?>