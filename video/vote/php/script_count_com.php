<?php

unset($name_oeuvre);
unset($vote_oeuvre);

require('bdd/connect.php');

$query = $bdd->query('SELECT * FROM oeuvre WHERE categorie="com"');

$vote_oeuvre_com = $query->rowCount();

if($vote_oeuvre_com == 0){
  $name_oeuvre[1]="Pas d'oeuvre";
  $vote_oeuvre[1]=0;
}

else{

$i = 1;

while ($donnees = $query->fetch())
{

  $id_oeuvre_com = $donnees['id_oeuvre'];

  $query2 = $bdd->query('SELECT * FROM votant WHERE id_oeuvre="'.$id_oeuvre_com.'"');

  $name_oeuvre[$i]=$donnees['nom'];
  $vote_oeuvre[$i]=$query2->rowCount();
  $i=$i+1;

}

$_SESSION['name_oeuvre_com']=$name_oeuvre;


$_SESSION['vote_oeuvre_com']=$vote_oeuvre;

$query->closeCursor();
$query2->closeCursor();

}
 ?>
