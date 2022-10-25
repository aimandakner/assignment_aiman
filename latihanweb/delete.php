<?php 
include_once('connection.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM pelajar WHERE id = '$id'");

header('location: index.php')
?>