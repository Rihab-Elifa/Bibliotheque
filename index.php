<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="design.css">
</head>

<body>
<?php
 $x=include('./model/livre.php');
 $l=new Livre();
$t1=$l->listeLivre();

?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Hidden brand</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">


                    <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle bg-primary " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    categorie
  </a>

  <div class="dropdown-menu bg-primary" aria-labelledby="dropdownMenuLink">

  <?php  

$l2=new Livre();
$c=$l2->listeCategorie();
for($i=0;$i<count($c);$i++){







?>


<a class="dropdown-item" href=" ./view/categorie.php?idcat=<?php echo $c[$i][0]; ?>"> <?php echo $c[$i][1];  ?>  </a>


<?php } ?>

  </div>
</div>

                </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="./view/inscrir_0.html"><i class="fa fa-bolt" aria-hidden="true"></i> inscrir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./view/login_0.html"><i class="fa fa-sign-in" aria-hidden="true"></i> login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./view/contact.php"><i class="fa fa-comment" aria-hidden="true"></i>  contact</a>
                    </li>

                </ul>
                <form class="d-flex" method="post" action="./view/search.php">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
                
            </div>
        </div>
    </nav>

  

    <header>

        <div class="inscrir">
            <h1>Bibliotheque </h1>
            <p> Inscrir au bibliotheque gratuitement ! <br> <br><a href="./view/inscrir_0.html" class="btn btn-primary">Inscrir <i
                        class="fa fa-chevron-right" aria-hidden="true"></i>
                    </i>
                </a></p>

        </div>


    </header>

    <section>
        <!-- box livre-->
        <?php  for($i=0;$i<count($t1);$i++) {   ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $t1[$i][5] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $t1[$i][1] ?></h5>
                <p class="card-text">nombre de page:<?php echo $t1[$i][4] ?></p>
                <p class="text-success"><?php echo $t1[$i][3] ?> </p>
                <a href="#" class="btn btn-primary">Details</a>
            </div>
        </div>
        <?php } ?>
        <!--fin-->





    </section>

    <footer class="bg-primary">

        <div class="row">
            <div class="elm1">
                <p class="icon"> <i class="fa fa-users" aria-hidden="true"></i></p>
                <p> utilisateur </p>
                <?php 
                       require_once('./config/Config.php');
                       $c=new Config();
                       $pdo=$c->cnx();
                       $req="SELECT * FROM utilisateur";
                       $res=$pdo->query($req);
                       $tt=$res->fetchAll() or print_r($pdo->ErroeInfo());
                    
                       echo count($tt);
                 
                ?>
                
              
    
            </div>
            <div class="elm1">
                <p class="icon"><i class="fa fa-book" aria-hidden="true"></i>
                </p>
                <p> livre </p>
                <?php
                         
                         echo count($t1);
                ?>
                





            </div>



        </div>



        <p class="auteur"> 2020-2021|RihabElifa</p>

    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>