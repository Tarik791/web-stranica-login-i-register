<?php 
require 'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$sql = "INSERT INTO register VALUES (NULL, '$name', '$email', '$password','$gender')";
$query = mysqli_query($db, $sql);

header ('location: index.php');




?>