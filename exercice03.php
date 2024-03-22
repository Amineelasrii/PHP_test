<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$prenom = "malik";
$nom = "belhail";
echo var_dump($prenom);
echo "</br>";
echo var_dump($nom);
echo "</br>";
echo $prenom." ".$nom ;
echo "</br>";
$nom_complet = $prenom." ".$nom ;
echo $nom_complet ;
echo "</br>";
echo var_dump($nom_complet);
echo "</br>";
$pon = "name";
$pon.=" Homme";
echo $pon;
?>
</body>
</html>