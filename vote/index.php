<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/connect_style.css" />
   <title> Vote FRAMMI </title>
 </head>
 <body>
   <header>
     <img id="logo_accueil" src="img/Logo_FRAMMI_blanc.png" alt="Logo FRAMMI"/>
   </header>
   <section id="connexion">
     <h2>Connexion</h2>
     <!-- erreur si l'utilisateur n'a pas été rentré -->
     <?php
     if (isset($_SESSION['error'])){
      if ($_SESSION['error']==1){
        ?>
        <div class="alert alert-danger" role="alert">
           Vous n'avez pas rentré de nom d'utilisateur
        </div>
        <?php
      }
        ?>

      <!-- erreur si le mot de passe n'a pas été rentré -->
      <?php
        if ($_SESSION['error']==2){
          ?>
           <div class="alert alert-danger" role="alert">
              Vous n'avez pas rentré de mot de passe
           </div>
          <?php
         }
          ?>

      <!-- erreur si le compte utilisateur n'a pas été trouvé -->
      <?php
        if ($_SESSION['error']==3){
          ?>
            <div class="alert alert-danger" role="alert">
              Votre compte utilisateur n'a pas été trouvé dans la base de donnée
            </div>
          <?php
          }
          ?>

      <!-- erreur si le compte utilisateur a été trouvé plusieurs fois dans la base de donnée -->
      <?php
        if ($_SESSION['error']==4){
          ?>
            <div class="alert alert-danger" role="alert">
              Erreur interne, contactez le Webmaster
            </div>
          <?php
          }
          ?>

      <!-- erreur si le mot de passe est faux -->
      <?php
        if ($_SESSION['error']==5){
          ?>
            <div class="alert alert-danger" role="alert">
              Mauvais mot de passe
            </div>
          <?php
          }
        }
          ?>

     <form action="php/script_connexion.php" method="POST" class="form-group" id="form_connexion">
       <input type="text" name="user" class="form-control" id="input_user" placeholder="Utilisateur"></input>
       <input type="password" name="password" class="form-control" id="input_pass" placeholder="Mot de passe"></input>
       <button type="submit" class="btn btn-primary" id="button_form">Connexion</button>
     </form>
   </section>
 </body>
</html>

<?php

session_destroy();

 ?>
