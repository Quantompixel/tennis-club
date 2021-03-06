<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Registrieren</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<main>
    <section class="wrapper">
        <form action="submit.php" method="get">
            <div class="form-elem">
                <label for="firstname">Vorname: </label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="form-elem">
                <label for="lastname">Nachname: </label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div class="form-elem">
                <label for="username">Benutzername: </label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-elem">
                <label for="password">Passwort: </label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-elem">
                <input type="password" name="repeat" placeholder="Passwort wiederholen ..." id="repeat">
            </div>
            <div class="form-elem">
                <label for="email">E-Mail-Adresse: </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-elem">
                <label for="phone">Telefonnummer: </label>
                <input type="phone" name="phone" id="phone">
            </div

            <?php
            $error = empty($_REQUEST['error']) ? 'empty' : $_REQUEST['error'];
            switch ($error) {
                case 3:
                    echo "<p class='error'>Es sind nicht alle Felder ausgefüllt.</p>";
                    break;
                case 4:
                    echo "<p class='error'>Not matching passwords.</p>";
                    break;
                case 10:
                    echo "<p class='error'>SQL Error.</p>";
                    break;
            }
            ?>

            <hr>

            <input type="submit" value="Registrieren">
        </form>
    </section>
</main>

</body>
</html>
