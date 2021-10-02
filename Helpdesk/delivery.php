<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

	if (isset($_GET['delivery'])) {
		$id = $_GET['delivery'];

	$sql = "UPDATE reservations SET Device_delivery = 'Delivered' WHERE ID = $id";
	$sqly = mysqli_query($db, $sql);

	header('Location: device_delivery.php');
}

?>