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

//final class trapCard extends Card --> cette classe ne peut etre herité
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
/**
 *  une class abstraite : 
 *  -- Ne peut pas etre instancier
 *  -- factoriser du code
 *  -- une class ne peut qu'etendre qu'une seule autre classe
 *  une interface  : 
 *  -- API
 *  -- fournit un contrat de service 
 *  -- on peut faire multiples implementation des interface se qu'on peut pas faire avec les classe
 *  Trait :
 *  -- Ré-utilisation de code, dans des classes indépendantes
 *  -- Similaire à une classe 
 *  -- Grouper des fonctionnalité
 *  -- Pas d'instanciation d'un trait
 */

trait tRouting{
    function parse(){
        echo 'parsing..';
    }
    function get($req){
        echo 'get function';
    }
}
class Module {
    //Pour pouvoir utiliser les functionnalité du trait
    use tRouting;
}
$test = new Module();
$test->parse();
interface IArticle{
    public function create();
    public function save($author,$content);
    public function delete();
    public function getNbComments();
}
/**
 * On doit implementer toutes les methodes
 */
class BlogArtcile implements IArticle{
    public function create()
    {
        echo 'create';
    }
    public function save($author, $content)
    {
        echo 'save';
        
    }
    public function delete()
    {
        echo 'delete';
    }
    public function getNbComments()
    {
        echo 'Nombre';
    }
} 
 abstract class Mere{

    abstract protected function hello();
 }

/*$card = new Card('liti','description card');
$card->Hello();*/

$card = new TrapCard('liti','description card','effet');
$card->Hello();

?>