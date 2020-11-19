<?php
/*
  attribut : variable appartenant a une class
  Méthode : fonction / service appartenant à une classe
*/
class Vehicle {
    //public , private , protected
    private $_name;
    private $_speed;
    //constructeur 
    public function __construct(string $name = 'Voiture', int $speed = 0)
    {
       $this->_name = $name;
       $this->_speed = $speed;
    }
    
    /*public function Mafonction(){
        echo 'Bienvenu dans la class Vehicle';
    } */

    public function move(){
        echo 'La voiture '.$this->_name. ' se déplace a '.$this->_speed. ' km/h';
    }
    /*Accesseurs getter (recuperer un attribut )et setter(modifier un attribut)  */
    
    public function getName(){
        return $this->_name;
    }

    public function setName(string $name) {
        $this->_name = $name;
    }
    public function getSpeed(){
        return $this->_speed;
    }
    public function setSpeed(string $speed){
        $this->_speed = $speed;
    }


}

//creation d'objet
$obj1 = new Vehicle('Liti',70);
$obj1->move();
$obj1->setName('Golf');
echo $obj1->getName();

//echo $obj1->_name; // Si name est public sinon faut utiliser getter et setter 
//$obj1->Mafonction();
/*$obj2 = new Vehicle();
echo $obj2->_name;*/
?>