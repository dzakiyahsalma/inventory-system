<?php
include('database.php');
$id = $_GET['id'];
$query = "DELETE from insertdata where id='$id'";
mysqli_query($database, $query);
header("location: save_data.php");
