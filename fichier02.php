<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$par = "Un tableau indexé contient des indices numériques qui indexent le contenu souhaité .Ces indexes commencent par défaut de 0 et s'incrémentent de 1 à chaque fois";
echo str_word_count($par);
echo "<br>";
echo str_replace(" ","",$par);
echo "<br>";
echo "<br>";
echo str_replace("tableau","array", $par);
echo "<br>";
echo "<br>";
echo strlen($par);
echo "<br>";
echo "<br>";
echo strtoupper($par);
echo "<br>";
echo "<br>";
echo strtolower($par);
?>


</body>
</html>