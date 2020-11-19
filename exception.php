<?php


$age = 15;
try {

    if($age < 18);
    throw new Exception('Tu n\'est pas majeur');

} /*catch(TypeError $e) {
 Type Erreur
}*/

catch(Exception $e) {
    echo $e->getMessage().'<br>';
    echo $e->getLine();
} 
finally {// Ce qui va se faire dans tous les cas 

}
//Herité la classe Exception
class MonException extends Exception { 
   public function show_email_error_message(){
     //  echo 'Erreur';
   }
}


$email = 'email.com';
try 
{
    if (!filter_var($email,FILTER_VALIDATE_EMAIL));
    throw new MonException('Email Incorrecte');
} catch(MonException $e) {
     //echo $e->getMessage();
      echo $e->show_email_error_message();

}
?>