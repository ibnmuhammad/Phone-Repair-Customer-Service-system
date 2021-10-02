<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

	if (isset($_GET['return'])) {
		$id = $_GET['return'];

	$sql = "UPDATE reservations SET Device_return = 'Returned' WHERE ID = $id";
	$sqly = mysqli_query($db, $sql);

	header('Location: device_return.php');
}

?>