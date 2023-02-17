<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="./des.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="./ajoutlivre.html" target="al">Dashboard admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link active m1" href="#" >ajout livre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active m2" href="#" >liste livre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active m3" href="#" >liste reservation livre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active m5" href="#">Supprimer Livre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active m4" href="#">Ajout categorie</a>
              </li>

           
              
          </div>
        </div>
      </nav>



      <iframe src="ajoutlivre.php" class="ifr" frameborder="0" title="al">

      </iframe>


    <SCRIPT src="./../bootstrap/js/bootstrap.min.js"></SCRIPT>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<script>
$(document).ready(function(){

    //ajout livre
    $('.m1').click(function(){
$('.ifr').attr('src','ajoutlivre.php')
})
//liste livre
$('.m2').click(function(){
$('.ifr').attr('src','listelivre_0.php')
})
//listeReservationLivre.html
$('.m3').click(function(){
$('.ifr').attr('src','listeReservationLivre.php')
})
//ajoutCategorie.html
$('.m4').click(function(){
$('.ifr').attr('src','ajoutCategorie_0.html')

})
//supprimerLivre
$('.m5').click(function(){
$('.ifr').attr('src','supprimer.html')
})



})

</script>

</body>
</html>