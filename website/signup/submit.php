<?php
session_start();
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];

$pdo = new PDO('mysql:host=localhost;dbname=tennisclub', 'root', '');

$statement = $pdo->prepare("INSERT INTO club_member (username, password, email, phone, first_name, last_name) VALUES (:username, MD5(:password), :email, :phone, :first_name, :last_name)");
$statement->execute(array('username' => $username, 'password' => $password, 'email' => $email, 'phone' => $phone, 'first_name' => $firstname, 'last_name' => $lastname));

