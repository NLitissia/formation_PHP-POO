<?php
echo ('Fonnction et Tableau <br>');
//function et tableau 
$tab_in = array();
$tab = [
    5,
    10,
    15,
    20,

];
//tableau associatif
$ass = [
    'v1' => 20,
    'v2' => [
        1,
        2,
        4,
    ],
    4 => 4,
    7,
    8,
];
//Afficher
echo(gettype($tab));//array
var_dump($tab);
echo'<pre>';
print_r($tab);
echo'</pre>';
echo'<pre>';
print_r($ass); // les elements qui n'ont pas de clé vont etre indexé automatiquement a partir de 5
echo'</pre>';

foreach($ass as $key => $value) {
    echo '<p>'.$key .' => '.$value.'</p>';
}
function hello($name = "LYMAN")
{
 echo 'Hello '.$name;
}
function fonction1(...$lotofvariable) {
    $somme = 0;
    foreach($lotofvariable as $value) {
         $somme += $value;
    }
    echo '<br>'.$somme;

}
//fonctions usuelles 
/*structure de pile avec push et pop */
//array_push()
//array_pop()
//in_array()
//explode()
//https://www.php.net/manual/fr/book.array.php
$res = function(){echo 'function anonyme';};
hello();
fonction1(1);
fonction1(1,2,3,4);

?>