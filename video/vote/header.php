<?php
session_start();
if (!isset($_SESSION['login'])){
  header('Location:admin.php');
  exit();
}

include('php/script_user.php');

 ?>
<!DOCTYPE html>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/panel_style.css" />
   <script src="js/utils.js"></script>
   <script src="js/chart.bundle.min.js"></script>
   <title>Panel gestion FRAMMI</title>
 </head>
 <body>
   <header>
     <img id="logo" src="img/Logo_FRAMMI_noir.png" alt="Logo FRAMMI"/>
     <nav id="menu">
       <ul>
         <li><a href="panel.php" alt="">Accueil</a></li>
         <li><a href="add_votant.php" alt="">Ajouter des votants</a></li>
         <li><a href="submit.php" alt="">Inscriptions participants</a></li>
         <li><a href="add_oeuvre.php" alt="">Ajouter des oeuvres</a></li>
         <li><a href="stats.php" alt="">Statistiques</a></li>
         <li><a href="php/script_deconnect.php" alt="">Déconnexion</a></li>
       </ul>
     </nav>
   </header>
