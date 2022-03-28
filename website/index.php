<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<header>

</header>
<main>
    <div class="wrapper">
        <form action="submit.php" method="get" class="login">
            <div class="form-elem">
                <label for="username">Benutzername: </label><br>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-elem">
                <label for="password">Passwort: </label><br>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-elem">
                <input type="submit" value="Login">
            </div>
        </form>

        <form action="signup/signup.php" class="signup">
        <input type="submit" value="Registrieren">
        </form>
    </div>
</main>
<footer>

</footer>
</body>
</html>

