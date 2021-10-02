<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

	if (isset($_GET['employee'])) {
		$id = $_GET['employee'];

	$sql = "DELETE FROM employees WHERE employeeID = $id";
	$sqly = mysqli_query($db, $sql);

	header('Location: view_employees.php');
}

?>