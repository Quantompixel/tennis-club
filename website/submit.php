<?php
session_start();

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

echo $username;
echo $password;

$pdo = new PDO('mysql:host=localhost;dbname=tennisclub', 'root', '');
