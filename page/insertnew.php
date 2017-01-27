<?php
include_once('Connexion.php');


$res = mysqli_query($cnx,"INSERT INTO table_test(nom, prenom, age) VALUE ('Rhodes','Evan',34)");
echo "INSERT = ".(int) $res;


?>
