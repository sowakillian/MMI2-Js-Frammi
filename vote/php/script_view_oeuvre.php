<?php

require('bdd/connect.php');

$query = $bdd->query('SELECT * FROM oeuvre');

$i = 1;

while ($donnees = $query->fetch())
{

  $id_oeuvre_prog = $donnees['id_oeuvre'];

  $query2 = $bdd->query('SELECT * FROM votant WHERE id_oeuvre="'.$id_oeuvre_prog.'"');

  $name_oeuvre[$i]=$donnees['nom'];
  $vote_oeuvre[$i]=$query2->rowCount();
  $i=$i+1;

}

 ?>
