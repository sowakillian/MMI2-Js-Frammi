<?php

session_start();

if (empty($_GET['add_participant'])){
  $_SESSION['erreur'] = 1;
    header('location: ../add_votant.php');
  exit();
}

$nb_votant = $_GET['add_participant'];
$user_votant = array();
$mdp_votant = array();

require('../bdd/connect.php');

for ($i = 1; $i <= $nb_votant; $i++){

  $user_votant[$i]=chr(rand(97,122)).chr(rand(48,57)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(48,57)).chr(rand(97,122)).chr(rand(65,90)).chr(rand(48,57)).chr(rand(48,57));
  $mdp_votant[$i]=chr(rand(48,57)).chr(rand(48,57)).chr(rand(97,122)).chr(rand(65,90)).chr(rand(48,57)).chr(rand(97,122)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(48,57));

  $query = $bdd->prepare('INSERT INTO votant(id_votant, user, mdp, id_oeuvre, vote) VALUES(:id_votant, :user, :mdp, :id_oeuvre, :vote)');

  $query->execute(array(
    'id_votant' => '',
    'user' => $user_votant[$i],
    'mdp' => sha1($mdp_votant[$i]),
    'id_oeuvre' => '0',
    'vote' => '0'
  ));
}

$_SESSION['user_votant'] = $user_votant;
$_SESSION['mdp_votant'] = $mdp_votant;

header('location: ../add_votant.php');
exit();

 ?>
