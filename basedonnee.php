<?php

//PDO -- PHP DATA OBJECT
require 'db-config.php';
try{
 //Option pour manipuler PDO , utf8 pour l'encodage
    $option = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

    ];
    $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS,$option);
   // echo 'connexion etablie';
   $sql = 'SELECT * FROM users';
   $result = $PDO ->query($sql);
   
   
    /*Fetch Both: par defaut 
            ASSOC : tableau associatif 
            OBJ (objet)
    On peut aussi changer le mode de maniere definitive 
     $result->setfetchMode(PDO::FETCH_ASSOC)

    */
   /*while($data = $result->fetch(PDO::FETCH_ASSOC)) {
      
      //pour afficher tous  print_r($data);
      echo $data['nom'].' - '.$data['prenom'].'<br>';
     
   }
*/
   /*while($data = $result->fetch(PDO::FETCH_OBJ)) {
     echo '<pre>';
     print_r($data->nom);
     echo '</pre>';
    //echo $data['nom'].' - '.$data['prenom'].'<br>';
   
 }*/

 $list_Utilisateur = $result->fetchAll(PDO::FETCH_OBJ);
 //print_r($list_Utilisateur);
foreach($list_Utilisateur as $user) {
  echo $user->nom.'<br>';
 }
 $result->closeCursor();



   
}catch(PDOException $e) {
    echo $e->getMessage();
}





?>