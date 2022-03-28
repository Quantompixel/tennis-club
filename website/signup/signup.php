<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Registrieren</title>
</head>
<body>
    <form action="submit.php" method="get">
        <div>
            <label for="firstname">Vorname: </label>
            <input type="firstname" name="firstname" placeholder="..." id="firstname">
        </div>
        <div>
            <label for="lastname">Nachname: </label>
            <input type="lastname" name="lastname" placeholder="..." id="lastname">
        </div>
        <div>
            <label for="username">Benutzername: </label>
            <input type="username" name="username" placeholder="Benutzername eingeben ..." id="username">
        </div>
        <div>
            <label for="password">Passwort: </label>
            <input type="password" name="password" placeholder="Passwort eingeben ..." id="password">
        </div>
        <div>
            <input type="repeat" placeholder="Passwort wiederholen ..." id="repeat">
        </div>
        <div>
            <label for="email">E-Mail-Adresse: </label>
            <input type="email" name="email" placeholder="E-Mail-Adresse ..." id="email">
        </div>
        <div>
            <label for="phone">Telefonnummer: </label>
            <input type="phone" name="phone" placeholder="..." id="phone">
        </div>

        <input type="submit" value="Registrieren">
    </form>
</body>
</html>
