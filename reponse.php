<a href="formulaire.php">Retour au formulaire</a>
<?php
/**failles xss */
/*htmlspecialchars() --> entité html correspondante */
/*htmlentities()*/
//print_r(htmlspecialchars($_POST['user_name']));

/*verification des données du formulaire */

if((isset($_POST['user_name']))&&(!empty($_POST['user_name']))){
    echo("user_name est déclaré et non vide");
}
?>