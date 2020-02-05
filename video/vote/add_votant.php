<?php

require('header.php');

?>
<!-- SI L'ON N'A PAS DEMANDER A CREER D'UTILISATEUR SA AFFICHE LA PAGE NORMAL -->
<?php

if (!isset($_SESSION['user_votant'])){

?>

   <section id="Title">
     <?php include('php/script_count_votant.php'); ?>
     <h2>Actuellement, il y a <?php echo $nb_votant; ?> participants inscrits</h2>
   </section>
   <section id="content">
      <div id="form_particip">
        <h3>Ajouter des participants</h3>
        <form class="form-inline" action="php/script_add_votant.php" method="GET">
          <input type="text" class="form-control" id="nb_add_participant" name="add_participant" placeholder="Nombre de participants">
          <button type="submit" class="btn btn-primary mb-2 button_form">Inscrire</button>
        </form>
      </div>
      <div class="bloc">
        <h1>Votant inscrits</h1>

        <p>Nombre de votants inscrits : <?php echo $nb_votant; ?> votants</p>
        <p>Nombre de votants ayant votés : <?php echo $nb_votant_done; ?> votants</p>
        <p> Nombre de votants restant à voter : <?php echo $nb_votant_undone; ?> votants</p>
      </div>
    </section>

<?php
}
else{

  $user_votant = $_SESSION['user_votant'];
  $mdp_votant = $_SESSION['mdp_votant'];

?>

<!-- SINON ON AFFICHE LA PAGE AVEC LES VOTANTS INSCRITS DANS UN TABLEAU -->
<div class="alert alert-success" role="alert">
  <?php echo count($user_votant); ?> participants ont bien été ajoutés !
</div>
<div class="alert alert-danger" role="alert">
  Attention ! Sauvegardez les identifiants des comptes, ils ne seront plus disponible après rechargement de la page !
</div>
<section id="tab">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Mot de passe</th>
    </tr>
  </thead>
  <tbody>
<?php
  for ($i = 1; $i <= count($user_votant); $i++){
  ?>
    <tr>
      <td><?php echo $user_votant[$i] ?></td>
      <td><?php echo $mdp_votant[$i] ?></td>
    </tr>
  <?php
  }
 ?>
  </tbody>
  </table>
 </section>


 <?php
}
  ?>
   <footer>
     <p>Réalisé pour FRAMMI AWARDS 10EME EDITION par l'agence FEWZ | 2018-2019</p>
   </footer>
 </body>
</html>
<?php

unset($_SESSION['user_votant']);
unset($_SESSION['mdp_votant']);

 ?>
