<?php
echo 'Gestion d\'erreurs';
//error_reporting(0); //desactiver toutes les erreurs
//error_reporting(-1) afficher toute les erreur 
error_reporting(-1);
/*echo $number;  variable number n'existe pas Notice*/
/*modifier la valeur dans phpini*/
ini_set("display_errors",1);
/* Notre gestionnaire d'erreur
  function error_handler($errno(type error, alerte, avertissement)
  , $erreur message, $errfile, $errline,$errdata (les variable liée à l'erreur))

*/
$my_error_handler = function(int $errno, string $errmsg, string $errfile, int $errline){
switch($errno) {
   
    case E_USER_ERROR:
        echo $errmsg;
         break;

    case E_USER_WARNING:
         echo $errmsg;
         break;

    case E_USER_NOTICE:
        echo $errmsg;  
        break; 

    default:
           echo "Erreur non reconnu …";
           break;
}
};
set_error_handler($my_error_handler);
$number = -1;
if($number < 0) {
trigger_error("le nombre est négatif",E_USER_WARNING);//alias : user_error()
}
echo $number;
restore_error_handler();//Restaurer le gestionnaire par defaut 
//Systeme de Log 
//deuxeiem argument 
//error_log("message erreur …",1,"email") envoi les log par email
//error_log("message erreur …",3,"error.log") fichier erreur log
?>