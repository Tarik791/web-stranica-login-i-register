<?php 

require 'connection.php';
session_start();

$name = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT id FROM register WHERE username = '$name' AND password = '$password'";
$query = mysqli_query($db, $sql);
$id = mysqli_fetch_assoc($query)['id'];

if($id){
    $_SESSION['id'] = $id;
    header ('location: NakonRiL.php');
}else{
    header ('location: index.php');
}


?>