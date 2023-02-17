<?php
if(isset($_POST["s8"])){
  $titre=$_POST["id"];
  $r=include('./../config/Config.php');
  $c=new Config();
 $pdo=$c->cnx();
 $req='DELETE from livre WHERE titre=$titre ';
 exec($req);
 echo 'ce livre est supprimer';
}
?>