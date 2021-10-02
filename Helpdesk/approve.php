<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

	if (isset($_GET['reservation'])) {
		$id = $_GET['reservation'];

	$sql = "UPDATE reservations SET Reservation_approval = 'Approved' WHERE ID = $id";
	$sqly = mysqli_query($db, $sql);

	header('Location: new_reservation.php');
}

?>