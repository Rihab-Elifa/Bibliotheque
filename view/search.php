<?php

    $r=include('./../config/Config.php');
    
    $c=new Config();
   $pdo=$c->cnx();
   $search=isset($_POST['search']);
   $q=$pdo->query("SELECT titre,photo FROM livre WHERE titre=$search");
   while($r=$q->fetchAll()){

       echo 'resultat de la recherche:'.$r['titre'].','.$r['photo'].'<br>';
   }



?> 