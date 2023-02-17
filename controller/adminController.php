<?php



//ajout Categorie

if(isset($_POST["s1"])){
$categ=$_POST["categ"];
    $x=include('./../model/livre.php');
$l=new Livre();

$l->nomCateg=$categ;
 //ajoutCategorie
echo $l->ajoutCategorie() ;

echo "categorie Ajouter";


   
}

//AJout livre 

if(isset($_POST['s2'])){
    $categ=$_POST["categ"];
    $x=include('./../model/livre.php');
    
    $titre=$_POST["titre"];
    $auteur=$_POST["auteur"];
    $ftmp=$_FILES["photo"]["tmp_name"];
    $fn=$_FILES["photo"]["name"];
    $nbrpage=$_POST["nbrpage"];
    $categ =$_POST["categ"];
//upload photo
move_uploaded_file($ftmp,'./../images/'.$fn);
$url='./images/'.$fn;


$l=new Livre();
$l->titre=$titre;
$l->idcateg= $categ;
$l->auteur= $auteur;
$l->nbpage=$nbrpage;
$l->photo=$url;
$l->AjoutLivre();
echo 'livre ajouter';
}
//supprimer livre

if(isset($_POST["s8"])){
    $titre=$_POST["id"];
        $x=include('./../model/livre.php');
    $l=new Livre();
    
    $r=include('./../config/Config.php');
    $c=new Config();
   $pdo=$c->cnx();
 $req='SELECT titre FROM  livre ';
 $res=$pdo->query($req) or print_r($pdo->errorInfo());
 $t=$res->fetchAll();

 for($i=0;$i<count($t);$i++){
     if($t[$i]['titre']==$titre)
     
         echo 'Livre supprimer';
     }
 }
       



?>