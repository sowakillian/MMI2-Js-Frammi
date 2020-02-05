<?php

require('header.php');
require('bdd/connect.php');

?>
   <section id="Title">
     <h2>Demande de participations sur le site FRAMMI</h2>
   </section>
   <section id="content">
     <table class="table">
       <thead class="thead-dark">
         <tr>
           <th scope="col">#</th>
           <th scope="col">Nom</th>
           <th scope="col">Prénom</th>
           <th scope="col">Mail</th>
           <th scope="col">Titre</th>
           <th scope="col">Description</th>
           <th scope="col">Actions</th>
         </tr>
       </thead>
       <tbody>
         <?php
            $query = $bdd->query('SELECT * FROM submit');
            while ($donnees = $query->fetch()){
              $id_submit = $donnees['id_submit'];
              $nom = $donnees['nom'];
              $prenom = $donnees['prenom'];
              $mail = $donnees['mail'];
              $categorie = $donnees['categorie'];
              $titre = $donnees['titre'];
              $description = $donnees['description'];
              $lien_dl = $donnees['lien'];
              ?>
              <tr>
                <th scope="row"><?php echo $id_submit; ?></th>
                <td><?php echo $nom; ?></td>
                <td><?php echo $prenom; ?></td>
                <td><?php echo $mail; ?></td>
                <td><?php echo $titre; ?></td>
                <td><?php echo $description; ?></td>
                <td><a href="<?php echo $lien_dl; ?>" target="_blank" class="btn btn-primary button_frammi">Télécharger</a>
                  <br/><br/>
                  <a href="php/suppr_submit.php?id_oeuvre=<?php echo $id_submit; ?>" class="btn btn-danger">Supprimer</a>
                  <br/><br/>
                  <a href="add_oeuvre.php?id_oeuvre=<?php echo $id_submit; ?>" class="btn btn-primary button_frammi">Ajouter à la liste</a></td>
                </td>
              </tr>
            <?php } ?>
      </tbody>
    </table>
   </section>
   <footer>
     <p>Réalisé pour FRAMMI AWARDS 10EME EDITION par l'agence FEWZ | 2018-2019</p>
   </footer>
 </body>
</html>
