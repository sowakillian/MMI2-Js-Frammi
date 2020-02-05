<?php

session_start();

$target_dir = "../img/oeuvre/";
$target_file = $target_dir . basename($_FILES["image_oeuvre"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (empty($_POST['nom_oeuvre'])){
  $_SESSION['error']=1;
  header('Location:../add_oeuvre.php');
  exit();
}

if (empty($_POST['description_oeuvre'])){
  $_SESSION['error']=7;
  header('Location:../add_oeuvre.php');
  exit();
}

if ($_POST['categorie_oeuvre']=='none'){
  $_SESSION['error']=2;
  header('Location:../add_oeuvre.php');
  exit();
}

if (empty($_POST['lien_oeuvre'])){
  $_POST['lien_oeuvre']="none";
}

if (getimagesize($_FILES["image_oeuvre"]["tmp_name"]) == 0){
  $_SESSION['error']=4;
  header('Location:../add_oeuvre.php');
  exit();
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $_SESSION['error']=5;
  header('Location:../add_oeuvre.php');
  exit();
}

$image_oeuvre = md5(uniqid()) .'.'. $imageFileType;

if( !move_uploaded_file($_FILES["image_oeuvre"]["tmp_name"], $target_dir . $image_oeuvre) )
    {
      $_SESSION['error']=6;
      header('Location:../add_oeuvre.php');
      exit();
    }

require('../bdd/connect.php');

if (!empty($_POST['id_submit'])){
  $id_submit = $_POST['id_submit'];
  $bdd->exec('DELETE FROM submit WHERE id_submit="'.$id_submit.'"');
}

  $nom_oeuvre = $_POST['nom_oeuvre'];
  $description_oeuvre = $_POST['description_oeuvre'];
  $categorie_oeuvre = $_POST['categorie_oeuvre'];
  $lien_oeuvre = $_POST['lien_oeuvre'];



  $query = $bdd->prepare('INSERT INTO oeuvre(id_oeuvre, nom, description, categorie, img, lien) VALUES(:id_oeuvre, :nom, :description, :categorie, :img, :lien)');

  $query->execute(array(
    'id_oeuvre' => '',
    'nom' => $nom_oeuvre,
    'description' => $description_oeuvre,
    'categorie' => $categorie_oeuvre,
    'img' => $image_oeuvre,
    'lien' => $lien_oeuvre
  ));

  $_SESSION['success']=1;
  header('Location:../add_oeuvre.php');
  exit();

 ?>
