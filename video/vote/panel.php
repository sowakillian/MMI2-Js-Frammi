<?php

require('header.php');

?>
   <section id="Title">
     <h2>Bienvenue <?php echo $username; ?>, que voulez-vous faire ?</h2>
   </section>
   <section id="content">
     <div class="bloc">
       <?php include('php/script_count_votant.php'); ?>
       <h1>Votant inscrits</h1>

       <p>Nombre de votants inscrits : <?php echo $nb_votant; ?> votants</p>
       <p>Nombre de votants ayant votés : <?php echo $nb_votant_done; ?> votants</p>
       <p> Nombre de votants restant à voter : <?php echo $nb_votant_undone; ?> votants</p>
     </div>
     <div class="bloc">
       <?php include('php/script_count_oeuvre.php'); ?>
       <h1>Oeuvres inscrites</h1>

       <p>Nombre d'oeuvres inscrites : <?php echo $nb_oeuvre; ?> oeuvres</p>
       <p>Nombre d'oeuvres audiovisuelles : <?php echo $nb_oeuvre_av; ?> oeuvres</p>
       <p> Nombre d'oeuvres communication : <?php echo $nb_oeuvre_com; ?> oeuvres</p>
       <p> Nombre d'oeuvres programmation : <?php echo $nb_oeuvre_prog; ?> oeuvres</p>
       <p> Nombre d'oeuvres graphique : <?php echo $nb_oeuvre_graph; ?> oeuvres</p>
     </div>
   </section>
   <footer>
     <p>Réalisé pour FRAMMI AWARDS 10EME EDITION par l'agence FEWZ | 2018-2019</p>
   </footer>
 </body>
</html>
