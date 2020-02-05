<?php

require('bdd/connect.php');

//on calcul le nombre de votants inscrits

$query = $bdd->query('SELECT * FROM votant');

$nb_votant = $query->rowCount();

$query->closeCursor();

//on calcul le nombre de votants qui ont voté

$query = $bdd->query('SELECT * FROM votant WHERE vote=1');

$nb_votant_done = $query->rowCount();

$query->closeCursor();

//on calcul le nombre de votants qui n'ont pas voté

$query = $bdd->query('SELECT * FROM votant WHERE vote=0');

$nb_votant_undone = $query->rowCount();

$query->closeCursor();

?>
