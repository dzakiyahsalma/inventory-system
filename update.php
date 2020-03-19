<?php
include('database.php');

$id = mysqli_real_escape_string($database, $_POST['id']);
$location = mysqli_real_escape_string($database, $_POST['location']);
$date = mysqli_real_escape_string($database, $_POST['date']);
$id_pic = mysqli_real_escape_string($database, $_POST['id_pic']);
$nama_pic = mysqli_real_escape_string($database, $_POST['nama_pic']);
$status = mysqli_real_escape_string($database, $_POST['status']);

$query = "UPDATE insertdata SET location = '$location', date = '$date', id_pic = '$id_pic', nama_pic = '$nama_pic', status = '$status' WHERE id = '$id'";
$result = mysqli_query($database, $query);

header("location: save_data.php");
