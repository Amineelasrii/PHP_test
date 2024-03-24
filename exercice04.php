<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcul sur les variables</h1>
    <?php
$tva = 0.190;
$prix = 150;
$na = 10;
$ht = $prix*$na;
echo $ht;
echo "<br>";
$ttc = $ht*(1+$tva);
echo $ttc;
echo "<br>";

    ?>
</body>
</html>