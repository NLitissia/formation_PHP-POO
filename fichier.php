<?php
echo "Les fichiers en PHP";

//lecture du fichier 

$file = fopen("infos.txt","ab+");
if(!$file)
  exit("Impossible d'ouvrir le fichier");

 //Lire le contenue du fichier 
 while (!feof($file)) 
     //echo $str;
    // echo fgets($file);
    //echo fread($file,2);
  //ecriture 
  fwrite($file,"Le nouveau contenu du fichier");  
 

if(!fclose($file))
   exit("Fermeture du fichier echouée")
   
   

  //Récuperer sous forme d'un tableau associatifs
 /* $info = file("infos.txt");
  echo '<pre>';
  print_r ($info);
  echo '</pre>';*/


?>