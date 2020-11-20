<?php
require 'db-config.php';
try{
 
    $option = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,

    ];
    $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS,$option);

    //$sql =$PDO->prepare('SELECT * FROM users where nom = ?');

    //BindValue Evalue directement 
    //$sql->bindValue(1,"NEGAA");
    //BindParam evalue à l exceution 
    $sql =$PDO->prepare('SELECT * FROM users where nom = :name');
    //On peut ajouter le type du parametre 
    //$sql->bindParam(":name",$name,PDO::PARAM_STR)
    /*
      PDO::PARAM_NULL
      PDO::PARAM_BOOL
      PDO::PARAM_INT
      PDO::PARAM_STR (par defaut)
    */
    $sql->bindParam(":name",$nom);
    $nom = "NEGAA";
    $sql->execute();

    //délimitation d'une chaine de caractere 
   /* $sql = $PDO->quote($sql);*/

   //Requete préparer
    //echo($sql);
   
    //$request = $PDO->query($sql);

    echo'<pre>';
    print_r($sql->fetch(PDO::FETCH_ASSOC));
    echo'</pre>';
} catch(PDOException $e){
    echo $e->getMessage();
}
?>