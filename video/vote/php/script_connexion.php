<?php
session_start();
ini_set('display_errors', 1);

require('../bdd/connect.php');

if (empty($_POST['user']))
{
  $_SESSION['error'] = 1;
  header('Location:../index.php');
  exit();
}

if (empty($_POST['password']))
{
  $_SESSION['error'] = 2;
  header('Location:../index.php');
  exit();
}

$post_user = $_POST['user'];
$post_mdp = $_POST['password'];

$query = $bdd->query('SELECT * FROM votant WHERE user="'.$post_user.'"');

$nb_result = $query->rowCount();

if ($nb_result == 0)
{
  $_SESSION['error'] = 3;
  header('Location:../index.php');
  exit();
}

if ($nb_result > 1)
{
  $_SESSION['error'] = 4;
  header('Location:../index.php');
  exit();
}

while ($donnees = $query->fetch())
{

  $bdd_mdp = $donnees['mdp'];

  if (sha1($post_mdp) != $bdd_mdp){
    $_SESSION['error'] = 5;
    header('Location:../index.php');
    exit();
  }

  $_SESSION['login']=$donnees['id_votant'];
  header('Location:../vote.php');
  exit();

}


$query->closeCursor();

 ?>
