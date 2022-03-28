<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Übersicht</title>
</head>
<body>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=tennisclub', 'root', '');

$statement = $pdo->prepare("SELECT * FROM court");
$statement->execute();

while ($court = $statement->fetch()) {
    echo "<div>";
    echo "<a href='../reservation/?court=".$court['court_id']."'>";
    echo $court['description'].": surface - ".$court['surface'];
    echo "</a>";
    echo "</div>";
}
?>
</body>
</html>

