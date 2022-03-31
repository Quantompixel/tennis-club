<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Übersicht</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <section>
        <div class="court">
            <figure>
                <img src="../images/tennis-court.svg" alt="A tennis court.">
            </figure>

            <div class="calendar">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id aliquet risus feugiat in ante metus dictum at tempor. Ullamcorper malesuada proin libero nunc consequat. Risus feugiat in ante metus. Nisi est sit amet facilisis magna etiam tempor orci eu. Ipsum suspendisse ultrices gravida dictum fusce. Vulputate dignissim suspendisse in est ante in nibh mauris. Pretium lectus quam id leo. Dignissim convallis aenean et tortor at. Quis lectus nulla at volutpat diam ut venenatis tellus in. Non tellus orci ac auctor augue. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida. Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum. Eget est lorem ipsum dolor sit. Enim facilisis gravida neque convallis a cras semper. Gravida arcu ac tortor dignissim convallis.

                    Tellus in metus vulputate eu scelerisque felis imperdiet. Id aliquet risus feugiat in. Bibendum est ultricies integer quis auctor elit sed. Cras pulvinar mattis nunc sed blandit libero. Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Odio eu feugiat pretium nibh ipsum consequat. Condimentum id venenatis a condimentum vitae sapien. Egestas pretium aenean pharetra magna. Augue lacus viverra vitae congue eu consequat. Sed blandit libero volutpat sed cras ornare. Eget nulla facilisi etiam dignissim diam. Adipiscing enim eu turpis egestas pretium aenean pharetra. Cursus eget nunc scelerisque viverra mauris in aliquam. Felis bibendum ut tristique et egestas quis ipsum suspendisse. Hac habitasse platea dictumst quisque sagittis. Massa vitae tortor condimentum lacinia quis vel. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. Netus et malesuada fames ac turpis egestas integer eget. Varius duis at consectetur lorem donec massa sapien.

                    Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. In nisl nisi scelerisque eu ultrices. Ornare massa eget egestas purus viverra accumsan in nisl nisi. Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. In fermentum posuere urna nec. Pharetra diam sit amet nisl suscipit. Massa massa ultricies mi quis hendrerit dolor. Egestas fringilla phasellus faucibus scelerisque eleifend. Enim nunc faucibus a pellentesque sit. Lorem ipsum dolor sit amet consectetur. Sit amet tellus cras adipiscing enim eu turpis egestas. Donec ultrices tincidunt arcu non sodales neque. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Gravida neque convallis a cras. Nec ultrices dui sapien eget. At tempor commodo ullamcorper a lacus. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Risus quis varius quam quisque. Diam in arcu cursus euismod quis viverra. Nunc faucibus a pellentesque sit.
                </p>
            </div>
        </div>
        <div class="court">
            <figure>
                <img src="../images/tennis-court.svg" alt="A tennis court.">
            </figure>

            <div class="calendar">

            </div>
        </div>
        <div class="court">
            <figure>
                <img src="../images/tennis-court.svg" alt="A tennis court.">
            </figure>

            <div class="calendar">

            </div>
        </div>
    </section>
</main>

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

