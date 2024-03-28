
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$pays =array("Germany","Spain","Italy","Switzerland","UK","USA");
echo "<ul>";
foreach ($pays as $p){
    echo "<li>".$p."</li>";
}
echo "</ul>";
echo "</br>";
$pays = array();
$pays["GR"]="Germany";
$pays["SP"]="Spain";
$pays["IT"]="Italy";
$pays["SW"]="Switzerland";
$pays["UK"]="UK";
$pays["USQ"]="USA";
foreach($pays as $k => $val){
    echo $k.":".$val."<br>";}
echo "</br>";
echo "</br>";
echo "</br>";
$payss =array("GY"=>"Germany","SN"=>"Spain","IY"=>"Italy","SD"=>"Switzerland","KU"=>"UK","US"=>"USA");
echo $payss["GY"];
echo "</br>";
?>
</body>
</html>