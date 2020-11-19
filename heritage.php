<?php

class Card{
    /*Avec un attribut privé les class fille peuvent pas accéder
      pour cela on peut utiliser protected
    */
    protected $_name;
    protected $_description;

    public function __construct($name,$description)
    {
        $this->_name = $name;
        $this->_description = $description;
    }
    public function Hello(){
     echo 'je suis la carte '.$this->_name;
    }
}

class trapCard extends Card{
    private $_effet;
    public function __construct($name,$description,$effet)
    { 
        //appel le contructeur de la class mere 
        parent::__construct($name,$description);
        $this->_effet = $effet;
        
    }
    public function Hello(){
        echo 'je suis TrapCard';
    }

}

/*$card = new Card('liti','description card');
$card->Hello();*/

$card = new TrapCard('liti','description card','effet');
$card->Hello();

?>