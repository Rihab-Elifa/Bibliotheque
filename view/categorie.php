<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorie</title>
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
</head>
<body>
<?php

$id=$_GET['idcat'];

require_once('./../config/Config.php');
$c=new Config();
$pdo=$c->cnx();

$req1="SELECT nom from categorie where idcateg='$id'";
$res1=$pdo->query($req1);
$r=$res1->fetch();



$req="SELECT * FROM livre  WHERE idcateg=$id";
$res=$pdo->query($req);
$tt=$res->fetchAll();

 



?>

<h1 class="text-light bg-primary"> Categorie : <?php echo $r[0]; ?> </h1> 


<?php

for($j=0;$j<count($tt);$j++){






?>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../<?php echo $tt[$j][5];  ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $tt[$j][1];  ?>  </h5>
    <p class="card-text"> disponible :     <?php echo $tt[$j][6];  ?>    </p>
    <button class="btn btn-lg btn-warning">auteur <?php echo $tt[$j][3];  ?></button>
    <button class="btn btn-primary btn-lg">Nombre de page <?php echo $tt[$j][4];  ?> </button>
    <br>
  </div>
</div>



<?php  } ?>





<a href="./../index.php" class="btn btn-primary mt-3 pt-3"> retour au page  Accuiel</a>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>