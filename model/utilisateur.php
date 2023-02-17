<?php

class   Utilisateur{

public $nom;
public $prenom;
public $email;
public $faculte;
public $motdepasse;
public $ville;


public function ajoutUtilisateur(){
    require_once('./../config/Config.php');
    $c=new Config();
    $pdo=$c->cnx();
    
   // return 'hello  :'.$this->nom;
$req="INSERT INTO utilisateur VALUES('$this->nom','$this->prenom','$this->email','$this->faculte','$this->motdepasse','$this->ville');";
$res=$pdo->exec($req);


}

//recherche utilisateur
public function rechercheUtilisateur(){
    require_once('./../config/Config.php');
    $c=new Config();
    $pdo=$c->cnx();
$req="SELECT * FROM utilisateur WHERE emailut='$this->email' AND motdepasse='$this->motdepasse'";
$res=$pdo->query($req);
$t=$res->fetchAll();
 if( count($t)>0 ){
    session_start();
    $_SESSION["emailut"]=$this->email;
header('location:../view/dashboardUt.php');

 }

}

//affiche les information d un utilisateur
public function AfficheUtilisateur(){
    require_once('./../config/Config.php');
    $c=new Config();
    $pdo=$c->cnx();
$req="SELECT * FROM utilisateur WHERE emailut='$this->email'";
$res=$pdo->query($req);
$t=$res->fetchAll();

return $t;

}







//recherche admin
public function rechercheAdmin(){
    require_once('./../config/Config.php');
    $c=new Config();
    $pdo=$c->cnx();
$req="SELECT * FROM admin WHERE emailadin='$this->email' AND motdepass='$this->motdepasse'";
$res=$pdo->query($req);
$t=$res->fetchAll();
 if( count($t)>0 ){
    session_start();
    $_SESSION["emailAdm"]=$this->email;
header('location:../view/dashbord.php');

 }

}

}







?>