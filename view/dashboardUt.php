<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard utilisateur</title>
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
</head>
<body>
<?php
session_start();
$e=$_SESSION["emailut"];
$x=include('../model/utilisateur.php');
$x2=include('../config/Config.php');

    $u=new Utilisateur();
    $u->email =$e;
    $t=$u->AfficheUtilisateur();
  
    $c=new Config();
   $pdo=$c->cnx();
$req='SELECT * FROM  livre WHERE disponible="no"';
$res=$pdo->query($req);
$tt=$res->fetchAll();




?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Dashboard utilisateur</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link active" href="reserver.php"> Reserver</a>
                  </li> 
            
        <li class="nav-item">
                    <a class="nav-link active" href="#">Liste livre reserver</a>
                  </li>        
           
                  

              
           


            </ul>
            <ul class="navbar-nav d-flex">
    
                <li class="nav-item">
                    <a class="nav-link active" href="#"> <?php echo $t[0][0]; ?>    </a>
                  </li>
               
            
                  <li class="nav-item">
                    <a class="nav-link active" href="#"><?php echo $t[0][1]; ?></a>
                  </li>
               
                  <li class="nav-item">
                     <a class="nav-link active" href="#"> <?php echo $e;   ?>  </a>
                  </li>
               
                  <li class="nav-item">
                      <a class="nav-link active" href="#"><a href="deconnection.php" class="btn btn-success">Deconecter</a></a>
                  </li>
            </ul>
            
          </div>
        </div>
      </nav>






      <h1 class="text-warning"> Liste livre reserver</h1>
     

      <table class="table">
        <thead>
          <tr>
            <th scope="col">livre</th>
           
            <th scope="col">reponce</th>
    
          </tr>
        </thead>
        <?php
       for($i=0;$i<count($tt);$i++)
       {

       ?>
        <tbody>
          <tr>
      
            <td><?php echo $tt[$i][1] ?></td>
            <td>oui</td>
      
          </tr>
          <?php
          } ?>
       
        </tbody>
      </table>



    




    <SCRIPT src="./../bootstrap/js/bootstrap.min.js"></SCRIPT>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</body>
</html>