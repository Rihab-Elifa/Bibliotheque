<?php

class Livre{

public $titre;
public $idcateg;
public $auteur;
public $nbpage;
public $photo;
public $disponible;
//nomcategorie
public $nomCateg;


//ajout livre
public function AjoutLivre(){
    require_once('./../config/Config.php');
    $c=new Config();
    $pdo=$c->cnx();

$req="INSERT INTO livre(titre,idcateg,auteur,nbpage,photo,disponible) VALUES('$this->titre',$this->idcateg,'$this->auteur',$this->nbpage,'$this->photo','oui');";
$res=$pdo->exec($req) or print_r($pdo->errorInfo());




}
 
//affiche liste des livre
public function listeLivre(){
    require_once('config/Config.php');
     $c=new Config();
    $pdo=$c->cnx();
$req='SELECT * FROM  livre ';
$res=$pdo->query($req) or print_r($pdo->errorInfo());
$t=$res->fetchAll();
return $t;


}


// ajout categorie
public function ajoutCategorie(){
    require_once('./../config/Config.php');
    $c=new Config();
    $pdo=$c->cnx();
$req="INSERT INTO categorie(nom) VALUES('$this->nomCateg')";
$res=$pdo->exec($req) or print_r($pdo->errorInfo());



}
//supprimer livre
public function supprimerLivre(){
    require_once('./../config/Config.php');
    $c=new Config();
    $pdo=$c->cnx();
    $req="DELETE FROM livre WHERE titre=$this->titre ";
    $res=$pdo->exec($req) or print_r($pdo->errorInfo());

}
// liste des categorie
public function listeCategorie(){
require_once(__DIR__."./../config/Config.php");
    $c=new Config();
    $pdo=$c->cnx();
$req="SELECT * FROM  categorie ";
$res=$pdo->query($req);
$t=$res->fetchAll();
return $t;


}


}


?>