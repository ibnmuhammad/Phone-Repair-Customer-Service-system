<?php

$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

if(isset($_POST['submit'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	if($password == $password2) {

		$sql = "INSERT INTO customers(firstname, lastname, phonenumber, email, password) VALUES('$firstname', '$lastname', '$phonenumber', '$email', '$password')";

		$result = mysqli_query($db, $sql);

		echo "<script> window.alert('Successfully registered') </script>";
		header('Location: index.php');

	}

	else {
		echo "<script> window.alert('Passwords mismatch') </script>";

	}

}

?>