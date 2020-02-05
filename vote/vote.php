<?php

session_start();
if (!isset($_SESSION['login'])){
  header('Location:index.php');
  exit();
}

require('bdd/connect.php');

$id_votant = $_SESSION['login'];

?>
<!DOCTYPE html>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/vote_style.css" />
   <title>Vote FRAMMI</title>
 </head>
 <body>
   <header>
     <img id="logo" src="img/Logo_FRAMMI_noir.png" alt="Logo FRAMMI"/>
     <?php
     if(isset($_SESSION['success'])){
     if($_SESSION['success'] == 1){
       ?>
       <div class="alert alert-success" role="alert">
         Votre vote a bien été pris en compte !
       </div>
       <?php
     }
     }
     ?>
   </header>
   <section id="content">
     <?php
        $query = $bdd->query('SELECT vote, id_oeuvre FROM votant WHERE id_votant="'.$id_votant.'"');
        while ($donnees = $query->fetch()){
          $vote = $donnees['vote'];
          $vote_oeuvre = $donnees['id_oeuvre'];
        }
        if ($vote == 0){
          echo "<h3> Actuellement nous n'avez pas encore voté</h3>";
        }
        else {
          echo "<h3>Vous avez déjà voté. Modifiez votre vote si vous souhaitez</h3>";
        }
        $query->closeCursor();
    ?>
     <h3>Oeuvres audiovisuelles</h3>
     <div class="row align-items-center justify-content-center">
       <?php

          $query = $bdd->query('SELECT * FROM oeuvre WHERE categorie="av"');

          while ($donnees = $query->fetch())
          {

            $id_oeuvre = $donnees['id_oeuvre'];
            $nom = $donnees['nom'];
            $desc = $donnees['description'];
            $img = $donnees['img'];
            $lien = $donnees['lien'];

        ?>
       <div class="col-6 col-md-4 block_vote_frammi">
         <div class="card" style="">
           <img class="card-img-top" src="img/oeuvre/<?php echo $img; ?>">
           <div class="card-body">
             <h5 class="card-title"><?php echo $nom; ?></h5>
             <p class="card-text"><?php echo $desc; ?></p>
             <?php if ($lien == 'none'){
               echo "";
             }
             else{
               echo '<a href="'.$lien.'" target="_blank" class="btn btn-primary button_frammi">Démo</a>';
             }
            if ($id_oeuvre == $vote_oeuvre){
               ?>
             <?php
             }
             else {
               ?>
              <a href="php/script_vote.php?id_oeuvre=<?php echo $id_oeuvre; ?>&id_votant=<?php echo $id_votant; ?>" class="btn btn-primary button_frammi">Voter pour cette oeuvre</a>
              <?php } ?>
           </div>
         </div>
       </div>
      <?php }
        $query->closeCursor();
      ?>
     </div>

     <h3>Oeuvres communication</h3>
     <div class="row align-items-center justify-content-center">
       <?php

          $query = $bdd->query('SELECT * FROM oeuvre WHERE categorie="com"');

          while ($donnees = $query->fetch())
          {

            $id_oeuvre = $donnees['id_oeuvre'];
            $nom = $donnees['nom'];
            $desc = $donnees['description'];
            $img = $donnees['img'];
            $lien = $donnees['lien'];

        ?>
       <div class="col-6 col-md-4 block_vote_frammi">
         <div class="card" style="">
           <img class="card-img-top" src="img/oeuvre/<?php echo $img; ?>">
           <div class="card-body">
             <h5 class="card-title"><?php echo $nom; ?></h5>
             <p class="card-text"><?php echo $desc; ?></p>
             <?php if ($lien == 'none'){
               echo "";
             }
             else{
               echo '<a href="'.$lien.'" target="_blank" class="btn btn-primary button_frammi">Démo</a>';
             }
             if ($id_oeuvre == $vote_oeuvre){
                ?>
              <?php
              }
              else {
                ?>
               <a href="php/script_vote.php?id_oeuvre=<?php echo $id_oeuvre; ?>&id_votant=<?php echo $id_votant; ?>" class="btn btn-primary button_frammi">Voter pour cette oeuvre</a>
               <?php } ?>
             </div>
         </div>
       </div>
      <?php }
        $query->closeCursor();
      ?>
     </div>

     <h3>Oeuvres graphique</h3>
     <div class="row align-items-center justify-content-center">
       <?php

          $query = $bdd->query('SELECT * FROM oeuvre WHERE categorie="graph"');

          while ($donnees = $query->fetch())
          {

            $id_oeuvre = $donnees['id_oeuvre'];
            $nom = $donnees['nom'];
            $desc = $donnees['description'];
            $img = $donnees['img'];
            $lien = $donnees['lien'];

        ?>
       <div class="col-6 col-md-4 block_vote_frammi">
         <div class="card" style="">
           <img class="card-img-top" src="img/oeuvre/<?php echo $img; ?>">
           <div class="card-body">
             <h5 class="card-title"><?php echo $nom; ?></h5>
             <p class="card-text"><?php echo $desc; ?></p>
             <?php if ($lien == 'none'){
               echo "";
             }
             else{
               echo '<a href="'.$lien.'" target="_blank" class="btn btn-primary button_frammi">Démo</a>';
             }
             if ($id_oeuvre == $vote_oeuvre){
                ?>
              <?php
              }
              else {
                ?>
               <a href="php/script_vote.php?id_oeuvre=<?php echo $id_oeuvre; ?>&id_votant=<?php echo $id_votant; ?>" class="btn btn-primary button_frammi">Voter pour cette oeuvre</a>
               <?php } ?>
             </div>
         </div>
       </div>
      <?php }
        $query->closeCursor();
      ?>
     </div>

     <h3>Oeuvres programmation</h3>
     <div class="row align-items-center justify-content-center">
       <?php

          $query = $bdd->query('SELECT * FROM oeuvre WHERE categorie="prog"');

          while ($donnees = $query->fetch())
          {

            $id_oeuvre = $donnees['id_oeuvre'];
            $nom = $donnees['nom'];
            $desc = $donnees['description'];
            $img = $donnees['img'];
            $lien = $donnees['lien'];

        ?>
       <div class="col-6 col-md-4 block_vote_frammi">
         <div class="card" style="">
           <img class="card-img-top" src="img/oeuvre/<?php echo $img; ?>">
           <div class="card-body">
             <h5 class="card-title"><?php echo $nom; ?></h5>
             <p class="card-text"><?php echo $desc; ?></p>
             <?php if ($lien == 'none'){
               echo "";
             }
             else{
               echo '<a href="'.$lien.'" target="_blank" class="btn btn-primary button_frammi">Démo</a>';
             }
             if ($id_oeuvre == $vote_oeuvre){
                ?>
              <?php
              }
              else {
                ?>
               <a href="php/script_vote.php?id_oeuvre=<?php echo $id_oeuvre; ?>&id_votant=<?php echo $id_votant; ?>" class="btn btn-primary button_frammi">Voter pour cette oeuvre</a>
               <?php } ?></div>
         </div>
       </div>
      <?php }
        $query->closeCursor();
      ?>
     </div>

   </section>
   <footer>
     <p>Réalisé pour FRAMMI AWARDS 10EME EDITION par l'agence FEWZ | 2018-2019</p>
   </footer>
 </body>
</html>

<?php

unset($_SESSION['success']);

?>
