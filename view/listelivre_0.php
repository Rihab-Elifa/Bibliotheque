<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste livre</title>
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
</head>
<body>



    <h1 class="text-warning" style="text-align: center;margin-top: 10%;">Liste livre</h1>
    <?php

require_once('./../config/Config.php');
$c=new Config();
$pdo=$c->cnx();



$req="SELECT * FROM livre ";
$res=$pdo->query($req);
$tt=$res->fetchAll();



   ?>
    <table class="table">
        
      <tr>
       
        <th scope="col">titre</th>
        <th scope="col">categorie</th>
        <th scope="col">auteur</th>
        <th scope="col">nombre de page</th>
        <th scope="col">disponible</th>
        <th scope="col">modifier</th>
        <th scope="col">supprimer</th>
      </tr>
      <?php
      for($i=0;$i<count($tt);$i++){
      ?>
      <tr>
       
        <td><?php echo $tt[$i][1]; ?></td>
        <td><?php echo $tt[$i][2]; ?></td>
        <td><?php echo $tt[$i][3] ?></td>
        <td><?php echo $tt[$i][4] ?></td>
        <td><?php echo $tt[$i][6];?></td>

        <td><a href="http://" class="btn btn-warning"> modifier</a> </td>
        <td><a href="supp.php" class="btn btn-danger"> supprimer</a> </td>
      </tr>
<?php } ?>
  
  </table>


      <SCRIPT src="./../bootstrap/js/bootstrap.min.js"></SCRIPT>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  
    
</body>
</html>