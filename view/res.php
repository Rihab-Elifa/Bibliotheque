<?php

$titre=$_POST['r'];
if(isset($_POST['r'])){
require_once('./../config/Config.php');
$c=new Config();
$pdo=$c->cnx();
$d="no";
$req1="UPDATE livre SET disponible=? WHERE titre=$titre ";
$stmt=$pdo->prepare($req1);
$stmt->execute([$d]);
echo "ce livre est bien reserver";
}
?>