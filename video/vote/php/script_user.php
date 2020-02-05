<?php

require('bdd/connect.php');

$id_user = $_SESSION['login'];

$query = $bdd->query('SELECT * FROM admin WHERE id="'.$id_user.'"');

while ($donnees = $query->fetch())
{

  $mdp = $donnees['mdp'];
  $username = $donnees['user'];

}

$query->closeCursor();

?>
