<?php
/**
 * Session en PHP 
 * PHPSESSID
 * 
 */
session_start();
$_SESSION['username'] = 'liti';
echo("Formation PHP");
echo'<p><a href="fonction.php" > Fonction </a></p>'; 
echo'<p> <a href="erreur.php" > Gestion d\'erreur </a> </p>'; 
echo '<p><a href="ClassPOO.php">Class</a></p>'
?>
<!DOCTYPE html>
<html>
<body>
     <h2> Session en php </h2>
     <p> Bonjour <?= $_SESSION['username']?></p>
</body>
</html>
