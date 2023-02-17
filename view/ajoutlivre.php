<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout livre</title>
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
</head>
<body>
<?php

$x=include('./../model/livre.php');
$l=new Livre();
$t1=$l->listeCategorie();
?>

<form action="./../controller/adminController.php" method="post" class="col-6 offset-2 mt-5" enctype="multipart/form-data" >
    <h1 class="text-warning"> Ajout livre</h1>
    <div class="form-inline">
        <label for=""> titre:</label>  <input type="text" name="titre" placeholder="titre" class="form-control" id=""> 
    </div>
 
    <div class="form-inline">
        <label for=""> auteur:</label>  <input type="text"name="auteur" placeholder="auteur" class="form-control" id=""> 
    </div>
    <div class="form-inline">
        <label for=""> photo:</label>  <input type="file" name="photo" placeholder="titre" class="form-control" id=""> 
    </div>
    
    <div class="form-inline">
        <label for=""> nbrpage:</label><input type="number" name="nbrpage" placeholder="auteur" class="form-control" id=""> 
    </div>
 

    <div class="form-inline">
        <label for=""> categorie:</label>         <select name="categ" id="">

        <?php
for($i=0;$i<count($t1);$i++){
    echo '<option value='.$t1[$i][0].'>'.$t1[$i][1].'</option>';
}
        ?>


        </select>
    </div>
<div class="d-grid gap-2">
 <button type="submit" name="s2" class="btn btn-warning btn-lg btn-block">Ajout Livre</button>
</DIV>
</form>



<SCRIPT src="./../bootstrap/js/bootstrap.min.js"></SCRIPT>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>