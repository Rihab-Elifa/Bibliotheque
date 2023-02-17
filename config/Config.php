<?php
class Config{


  public function cnx(){
    $pdo=new PDO('mysql:host=localhost;port=3306;dbname=bibliotheque','root','');
    return $pdo;


  }



}


?>