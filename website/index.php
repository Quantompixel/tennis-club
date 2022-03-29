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
    <h1>Anmelden</h1>
</header>
<main>
    <section class="wrapper">
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
        <section class="error">
            <?php
            $error = empty($_REQUEST['error']) ? 'empty' : $_REQUEST['error'];
            switch ($error) {
                case 2:
                    echo "<p>Falsches Passwort oder Account nicht gefunden.</p>";
                    break;
                case 3:
                    echo "<p>Es sind nicht alle Felder ausgefüllt.</p>";
                    break;
            }
            ?>
        </section>
        <hr>
        <form action="signup/signup.php" class="signup">
            <label class="signup-label" for="signup">Noch keinen Account?</label>
            <input type="submit" id="signup" value="Registrieren">
        </form>

    </section>
</main>
<footer>

</footer>
</body>
</html>

<?php
function check($param)
{
    return isset($param) && $param != '';
}

?>
