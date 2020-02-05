<?php

require('bdd/connect.php');

//on calcul le nombre d'oeuvres inscrites

$query = $bdd->query('SELECT * FROM oeuvre');

$nb_oeuvre = $query->rowCount();

$query->closeCursor();

//on calcul le nombre d'oeuvres audiovisuelles

$query = $bdd->query('SELECT * FROM oeuvre WHERE categorie="av"');

$nb_oeuvre_av = $query->rowCount();

$query->closeCursor();

//on calcul le nombre d'oeuvres communication

$query = $bdd->query('SELECT * FROM oeuvre WHERE categorie="com"');

$nb_oeuvre_com = $query->rowCount();

$query->closeCursor();

//on calcul le nombre d'oeuvres programmation

$query = $bdd->query('SELECT * FROM oeuvre WHERE categorie="prog"');

$nb_oeuvre_prog = $query->rowCount();

$query->closeCursor();

//on calcul le nombre d'oeuvres graphique

$query = $bdd->query('SELECT * FROM oeuvre WHERE categorie="graph"');

$nb_oeuvre_graph = $query->rowCount();

$query->closeCursor();

?>
