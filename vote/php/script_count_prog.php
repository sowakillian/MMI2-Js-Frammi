<?php

unset($name_oeuvre);
unset($vote_oeuvre);

require('bdd/connect.php');

$query = $bdd->query('SELECT * FROM oeuvre WHERE categorie="prog"');

$vote_oeuvre_prog = $query->rowCount();

if($vote_oeuvre_prog == 0){
  $name_oeuvre[1]="Pas d'oeuvre";
  $vote_oeuvre[1]=0;
}

else{

$i = 1;

while ($donnees = $query->fetch())
{

  $id_oeuvre_prog = $donnees['id_oeuvre'];

  $query2 = $bdd->query('SELECT * FROM votant WHERE id_oeuvre="'.$id_oeuvre_prog.'"');

  $name_oeuvre[$i]=$donnees['nom'];
  $vote_oeuvre[$i]=$query2->rowCount();
  $i=$i+1;

}

$_SESSION['name_oeuvre_prog']=$name_oeuvre;


$_SESSION['vote_oeuvre_prog']=$vote_oeuvre;

$query->closeCursor();
$query2->closeCursor();

}
 ?>
