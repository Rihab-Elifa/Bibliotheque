<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" />
    <title>reservation list</title>
</head>
<body>
  <?php 
  $x2=include('../config/Config.php');
  
       $c=new Config();
     $pdo=$c->cnx();
   $req='SELECT * FROM  livre WHERE disponible="no"';
   $res=$pdo->query($req);
   $tt=$res->fetchAll();




  ?>

    <h1 class="text-warning" style="text-align: center;margin-top: 10%;">liste Reservation</h1>



    <table class="table">
        <thead>
          <tr>
            <th scope="col">livre</th>
            <th scope="col">utilisateur</th>
         
         
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php for($i=0;$i<count($tt);$i++){

            
             ?>
            <th scope="row"><?php echo $tt[$i][0]; ?></th>
            <td><?php echo $tt[$i][1]; ?></td>
                    </tr>
          <?php
          
            }?>
         
        </tbody>
      </table>






    
    <SCRIPT src="./../bootstrap/js/bootstrap.min.js"></SCRIPT>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


</body>
</html>