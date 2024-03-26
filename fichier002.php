<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$tab1 =array("cle1"=>"se situe au regard du metier et de la demande de la formation","cle2"=>"acquérir les bases de l'algorithme","cle3"=>"programmer en orienté objet","cle4"=>"sites web statiques","cle5"=>"programmer en javascript","cle6"=>"bases de données","cle7"=>"sites web dynamiques");
echo var_dump($tab1);
echo "</br>";
$s1 = array();
$s1["cle1"]="se situer au regard du metier et de la demarche de formation";
$s1["cle2"]="acquerir les bases de l'algorithme";
$s1["cle3"]="programmer en orienté objet";
$s1["cle4"]="developper des sites web statiques";
$s1["cle5"]="programmer en javascript";
$s1["cle6"]="manipuler des bases de donnees";
$s1["cle7"]="developper des sites web dynamiques";
$s1["cle8"]="s'initier a la securite des systemes d'information";
foreach($s1 as $k => $val){
    echo $k.":".$val."<br>";}


?>
</body>
</html>