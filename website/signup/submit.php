<?php
session_start();
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$repeat = $_REQUEST['repeat'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];

$pdo = new PDO('mysql:host=localhost;dbname=tennisclub', 'root', '');

if (check($firstname) && check($lastname) && check($username) && check($password) && check($email)) {
    $statement = $pdo->prepare("INSERT INTO club_member (username, password, email, phone, first_name, last_name) VALUES (:username, MD5(:password), :email, :phone, :first_name, :last_name)");

    if (strcmp($repeat, $password) == 0) {
        if ($statement->execute(array('username' => $username, 'password' => $password, 'email' => $email, 'phone' => $phone, 'first_name' => $firstname, 'last_name' => $lastname))) {
            header('Location: /');
        } else {
            // ERROR 10: SQL Error.
            header('Location: /signup/signup.php?error=10');
        }
    } else {
        // ERROR 4: Not matching passwords.
        header('Location: /signup/signup.php?error=4');
    }
} else {
    // ERROR 3: Empty parameters.
    header('Location: /signup/signup.php?error=3');
}

function check($param)
{
    return isset($param) && $param != '';
}

