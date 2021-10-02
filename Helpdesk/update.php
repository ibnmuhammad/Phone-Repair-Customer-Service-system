<?php

session_start();
$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');



if (isset($_POST['submit'])) {

	$amount = $_POST['amount'];
	
	$dfd = "UPDATE reservations SET Amount_to_be_paid = $amount WHERE ID = '".$_SESSION['kay']."' ";
	$sqly = mysqli_query($db, $dfd);


if (!$sqly) {
	die(mysqli_error($db));
}else
{
	header('Location: new_reservation.php');
}

}



?>