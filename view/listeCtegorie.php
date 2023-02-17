<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Liste des Categorie:</h1>
<?php

$x=include('./../model/livre.php');
$l=new Livre();
$t1=$l->listeCategorie();



echo'<ul>';
for($i=0;$i<count($t1);$i++){
    echo'<p align=center ><li><strong>'. $t1[$i]['nom'].'</strong></li></p><br>';
}
echo'</ul>';
?>
</body>
</html>