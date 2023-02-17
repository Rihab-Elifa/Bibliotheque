<?php

    // inscription
if(isset($_POST["s1"])){
    $x=include('../model/utilisateur.php');
    $u=new Utilisateur();

$nom=$_POST["nom"];

$prenom=$_POST["prenom"];

$email=$_POST["email"];

$faculte=$_POST["faculte"];

$motdepasse=$_POST["motdepasse"];

$ville=$_POST["ville"];



$u->nom =$nom;
$u->prenom =$prenom;
$u->email =$email;
$u->faculte =$faculte;
$u->motdepasse =$motdepasse;
$u->ville =$ville;
$u->ajoutUtilisateur();
echo 'inscription reussi';

}


//login
if(isset($_POST["s2"])){
    $x=include('../model/utilisateur.php');
    $u=new Utilisateur();
    $email=$_POST["email"];
    $motdepasse=$_POST["motdepasse"];

    $u->email =$email;
    $u->motdepasse =$motdepasse;
    print_r($u->rechercheUtilisateur());
    print_r($u->rechercheAdmin());
    
}


?>