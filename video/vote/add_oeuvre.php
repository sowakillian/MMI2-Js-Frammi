<?php

require('header.php');

if (isset($_GET['id_oeuvre'])){
  $id_oeuvre = $_GET['id_oeuvre'];

  $query = $bdd->query('SELECT * FROM submit WHERE id_submit = "'.$id_oeuvre.'"');
  while ($donnees = $query->fetch()){
    $titre_oeuvre = $donnees['titre'];
    $categorie_oeuvre = $donnees['categorie'];
    $description_oeuvre = $donnees['description'];
  }
}
?>
<!-- SI L'ON N'A PAS DEMANDER A CREER D'UTILISATEUR SA AFFICHE LA PAGE NORMAL -->
<?php

if (!isset($_SESSION['user_votant'])){

?>

   <section id="Title">
     <?php include('php/script_count_oeuvre.php'); ?>
     <h2>Actuellement, il y a <?php echo $nb_oeuvre; ?> oeuvres inscrits</h2>
   </section>

   <!-- ALERTE DE SCRIPT -->
   <?php
   if (isset($_SESSION['success'])){
    if($_SESSION['success'] == 1){
   ?>
   <div class="alert alert-success" role="alert">
     L'oeuvre a bien été ajouté !
   </div>
   <?php
      }
      }
    ?>

    <!-- ALERTE DE SCRIPT -->
    <?php
    if (isset($_SESSION['error'])){
     if($_SESSION['error'] == 1){
    ?>
    <div class="alert alert-danger" role="alert">
      Vous n'avez pas rentré le nom de l'oeuvre
    </div>
    <?php
       }
     ?>

     <!-- ALERTE DE SCRIPT -->
     <?php
      if($_SESSION['error'] == 2){
     ?>
     <div class="alert alert-danger" role="alert">
       Vous n'avez pas rentré la catégorie de l'oeuvre
     </div>
     <?php
        }
      ?>

       <!-- ALERTE DE SCRIPT -->
       <?php
        if($_SESSION['error'] == 4){
       ?>
       <div class="alert alert-danger" role="alert">
         Vous n'avez pas rentré d'image pour l'oeuvre
       </div>
       <?php
          }
        ?>

        <!-- ALERTE DE SCRIPT -->
        <?php
         if($_SESSION['error'] == 5){
        ?>
        <div class="alert alert-danger" role="alert">
          Vous n'avez pas rentré le bon format d'image (JPG, PNG, GIF)
        </div>
        <?php
           }
         ?>

         <!-- ALERTE DE SCRIPT -->
         <?php
          if($_SESSION['error'] == 6){
         ?>
         <div class="alert alert-danger" role="alert">
           Erreur d'upload. Essayez plus tard
         </div>
         <?php
            }
            }
          ?>

   <section id="content">
      <div id="form_particip">
        <h3>Ajouter une oeuvre</h3>
        <form class="form-group" action="php/script_add_oeuvre.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <?php
              if(isset($titre_oeuvre)){
                echo '<input type="text" class="form-control form-control-lg" id="nom_oeuvre" name="nom_oeuvre" placeholder="Nom de l\'oeuvre" value="'.$titre_oeuvre.'">';
              }
              else {
                echo '<input type="text" class="form-control form-control-lg" id="nom_oeuvre" name="nom_oeuvre" placeholder="Nom de l\'oeuvre">';
              }
            ?>
          </div>

          <?php if (isset($categorie_oeuvre)){
            if ($categorie_oeuvre == "av"){
              ?>
              <div class="form-group">
                <select class="form-control form-control-lg" id="categorie_oeuvre" name="categorie_oeuvre">
                  <option value="none">Sélectionnez une catégorie</option>
                  <option value="av" selected="selected">Audiovisuelle</option>
                  <option value="com">Communication</option>
                  <option value="prog">Programmation</option>
                  <option value="graph">Graphisme</option>
                </select>
              </div>
              <?php
            }
            if ($categorie_oeuvre == "com"){
              ?>
              <div class="form-group">
                <select class="form-control form-control-lg" id="categorie_oeuvre" name="categorie_oeuvre">
                  <option value="none">Sélectionnez une catégorie</option>
                  <option value="av">Audiovisuelle</option>
                  <option value="com" selected="selected">Communication</option>
                  <option value="prog">Programmation</option>
                  <option value="graph">Graphisme</option>
                </select>
              </div>
              <?php
            }
            if ($categorie_oeuvre == "prog"){
              ?>
              <div class="form-group">
                <select class="form-control form-control-lg" id="categorie_oeuvre" name="categorie_oeuvre">
                  <option value="none">Sélectionnez une catégorie</option>
                  <option value="av">Audiovisuelle</option>
                  <option value="com">Communication</option>
                  <option value="prog" selected="selected">Programmation</option>
                  <option value="graph">Graphisme</option>
                </select>
              </div>
              <?php
            }
            if ($categorie_oeuvre == "graph"){
              ?>
              <div class="form-group">
                <select class="form-control form-control-lg" id="categorie_oeuvre" name="categorie_oeuvre">
                  <option value="none">Sélectionnez une catégorie</option>
                  <option value="av">Audiovisuelle</option>
                  <option value="com">Communication</option>
                  <option value="prog">Programmation</option>
                  <option value="graph" selected="selected">Graphisme</option>
                </select>
              </div>
              <?php
            }
          }
          else { ?>
          <div class="form-group">
            <select class="form-control form-control-lg" id="categorie_oeuvre" name="categorie_oeuvre">
              <option value="none">Sélectionnez une catégorie</option>
              <option value="av">Audiovisuelle</option>
              <option value="com">Communication</option>
              <option value="prog">Programmation</option>
              <option value="graph">Graphisme</option>
            </select>
          </div>
        <?php } ?>

          <div class="form-group">
            <textarea class="form-control" id="description_oeuvre" name="description_oeuvre" rows='5' placeholder="Description de l'oeuvre"><?php if(isset($description_oeuvre)){echo $description_oeuvre; }?></textarea>
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="lien_oeuvre" name="lien_oeuvre" placeholder="Lien de démonstration vers l'oeuvre (facultatif)">
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Image de l'oeuvre</label>
            <input type="file" class="form-control-file form-control-lg" id="image_oeuvre" name="image_oeuvre">
          </div>
          <?php if(isset($id_oeuvre)){
            ?>
            <input type="text" id="" name="id_submit" value="<?php echo $id_oeuvre; ?>" style="display:none;">
          <?php } ?>
          <button type="submit" class="btn btn-primary mb-2 button_form">Ajouter</button>
        </form>
      </div>
      <div class="bloc">
        <h1>Oeuvres inscrites</h1>

        <p>Nombre d'oeuvres inscrites : <?php echo $nb_oeuvre; ?> oeuvres</p>
        <p>Nombre d'oeuvres audiovisuelles : <?php echo $nb_oeuvre_av; ?> oeuvres</p>
        <p> Nombre d'oeuvres communication : <?php echo $nb_oeuvre_com; ?> oeuvres</p>
        <p> Nombre d'oeuvres programmation : <?php echo $nb_oeuvre_prog; ?> oeuvres</p>
        <p> Nombre d'oeuvres graphique : <?php echo $nb_oeuvre_graph; ?> oeuvres</p>
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

unset($_SESSION['error']);
unset($_SESSION['success']);

 ?>
