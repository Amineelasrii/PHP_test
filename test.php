<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> tester la constante __LINE__</h1>
<?php 
echo "la ligne", __LINE__,"ne contient pas d'erreur";
echo "<br>";
echo "le chemin du fichier est ", __FILE__;
echo "<br>";
echo "la version PHP utiliser sur projet ",PHP_VERSION ;
?>
</body>
</html>