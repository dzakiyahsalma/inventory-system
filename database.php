<?php
session_start();

$username = '';
$email = '';
$error = array();

$database = mysqli_connect('localhost', 'root', '', 'inventory_system');
