<?php

session_start();

if (empty($_POST['nom'])){
  $_SESSION['error'] = 1;
  header('location:index.php');
  exit();
}

if (empty($_POST['prenom'])){
  $_SESSION['error'] = 2;
  header('location:index.php');
  exit();
}

if (empty($_POST['mail'])){
  $_SESSION['error'] = 3;
  header('location:index.php');
  exit();
}

if (empty($_POST['formation'])){
  $_SESSION['error'] = 4;
  header('location:index.php');
  exit();
}

if ($_POST['categorie'] == "none"){
  $_SESSION['error'] = 5;
  header('location:index.php');
  exit();
}

if (empty($_POST['titre'])){
  $_SESSION['error'] = 6;
  header('location:index.php');
  exit();
}

if (empty($_POST['lien'])){
  $_SESSION['error'] = 7;
  header('location:index.php');
  exit();
}

if (empty($_POST['description'])){
  $_SESSION['error'] = 8;
  header('location:index.php');
  exit();
}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$formation = $_POST['formation'];
$categorie = $_POST['categorie'];
$titre = $_POST['titre'];
$lien = $_POST['lien'];
$description = $_POST['description'];

require('vote/bdd/connect.php');

$query = $bdd->prepare('INSERT INTO submit(id_submit, nom, prenom, mail, categorie, titre, description, lien) VALUES(:id_submit, :nom, :prenom, :mail, :categorie, :titre, :description, :lien)');

$query->execute(array(
  'id_submit' => '',
  'nom' => $nom,
  'prenom' => $prenom,
  'mail' => $mail,
  'categorie' => $categorie,
  'titre' => $titre,
  'lien' => $lien,
  'description' => $description
));

$_SESSION['success'] = 1;
header('location: index.php');
exit();

 ?>
