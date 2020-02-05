<?php

$host = "localhost";
$bdd = "fourniga";
$user = "fourniga";
$mdp = "Psig09374";

try
{
  $bdd = new PDO('mysql:host='.$host.';dbname='.$bdd.';charset=utf8', $user, $mdp);
}

catch (Exception $e){die('Erreur : ' . $e->getMessage());}

?>
