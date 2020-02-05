<?php

session_start();

$id_oeuvre = $_GET['id_oeuvre'];
$id_votant = $_GET['id_votant'];

require('../bdd/connect.php');

$query = $bdd->prepare('UPDATE votant SET vote = :vote, id_oeuvre = :id_oeuvre WHERE id_votant = :id_votant');
$query->execute(array(
	'vote' => '1',
	'id_oeuvre' => $id_oeuvre,
	'id_votant' => $id_votant
	));

$_SESSION['success']=1;

header('location:../vote.php');
exit();

 ?>
