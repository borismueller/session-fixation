<?php
session_start();
$name = $_GET['name'];
$password = $_GET['password'];

$connection = new mysqli("localhost", "root", "gibbiX12345", "fix");
if (!$connection) {
	throw new Exception("Error Processing Request: ".$connection->error);
}

$query = "SELECT * FROM user WHERE name = '$name' && password = '$password';"; //sql injection lets go
$result = mysqli_query($connection, $query);
if (!$result) {
	echo "something went wrong";
}
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$_SESSION['secret'] = $row['secret'];
	$_SESSION['id']     = session_id();
	header('Location: getPrivateData.php');
}
