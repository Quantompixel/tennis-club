<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="submit.php" method="get">
            <div class="form-elem">
                <label for="username">Benutzername: </label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-elem">
                <label for="password">Passwort: </label>
                <input type="password" id="password" name="password">
            </div >
            <div class="form-elem">
                <input type="submit" value="Login">
            </div>
        </form>

        <form action="register/signup.php">
            <input type="submit" value="Registrieren">
        </form>
    </main>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=tennisclub', 'root', '');

$statement = $pdo->prepare("SELECT * FROM court");
$statement->execute();


?>
</body>
</html>

