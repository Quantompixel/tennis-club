<?php
session_start();

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

echo $username;
echo $password;

$pdo = new PDO('mysql:host=localhost;dbname=tennisclub', 'root', '');

if (check($username) && check($password)) {
    $statement = $pdo->prepare("SELECT * FROM club_member WHERE username = :username");
    $statement->execute(array('username' => $username));

    $user = $statement->fetch();

    if (strcmp($user['password'], md5($password)) == 0) {
        header('Location: home/home.php');
    } else {
        // ERROR 2: Wrong password or specified user not found.
        header('Location: /?error=2');
    }
} else {
    // ERROR 3: Empty parameters.
    header('Location: /?error=3');
}

function check($param)
{
    return isset($param) && $param != '';
}
