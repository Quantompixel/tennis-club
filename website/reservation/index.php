<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Reservierung</title>
</head>
<body>
    <main>

    </main>
    <form action="submit.php" method="get">
        <?php
        $pdo = new PDO('mysql:host=localhost;dbname=tennisclub', 'root', '');
        $court = $_REQUEST['court'];
        $date = getdate();

        $statement = $pdo->prepare("SELECT * FROM court WHERE court_id = :id");
        $statement->execute(array('id'=>$court));
        $output = $statement->fetch();

        echo "<label for='date'>Datum: </label>";
        echo "<input type='date' value='".$date['year']."-".sprintf("%02s",$date['mon'])."-".sprintf("%02s",$date['mday'])."' id='date' name='date'>";
        echo "<br>";
        ?>

        <label for="from">Von</label>
        <select id="from" name="from">
            <?php
            for ($i = 0; $i < 24; $i++) {
                echo "<option value='".$i."'>".sprintf("%02s", $i).":00</option>";
            }
            ?>
        </select>
        <label for="to">bis</label>
        <select id="to" name="to">
            <?php
            for ($i = 0; $i < 24; $i++) {
                echo "<option value='".$i."'>".sprintf("%02s", $i).":00</option>";
            }
            ?>
        </select>

        <br>

        <label for="court">Platz: </label>
        <select id="court" name="court">
            <?php
            $statement = $pdo->prepare("SELECT * FROM court");
            $statement->execute();
            while ($row = $statement->fetch()) {
                echo "<option value='".$row['court_id']."'>".$row['description']."</option>";
            }
            ?>
        </select>

        <br>

        <label for="playertotal">Spieleranzahl</label>
        <input type="number" id="playertotal" name="players">

        <br>
        <input type="submit" value="reservieren">
    </form>
</body>
</html>