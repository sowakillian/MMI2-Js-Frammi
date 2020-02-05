<?php

session_start();

?>
<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8"> <!-- encodage -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" lang="fr" content="Killian Sowa">
    <link rel="stylesheet" href="css/reset.css"/> <!-- feuille de style reset -->
    <link rel="stylesheet" href="css/style.css"/> <!-- feuille de style principale -->
    <link rel="stylesheet" href="css/responsive.css"/> <!-- feuille de style principale -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/fakeLoader.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/aos.css" />
    <link rel="stylesheet" href="css/TimeCircles.css"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">




    <title>FRAMMI</title> <!-- titre de la page -->

</head>


<body>

<div id="flbackdrop"></div>
<div id="fakeLoader"></div>

  <?php
    if(isset($_SESSION['error']) && $_SESSION['error'] == 1){
      ?>
      <div class="inscriptions_overlay is-visible is-open"></div>
      <div class="inscriptions_form is-visible is-open" style="height:15%;">
        <h1>_MODALITÉS D'INSCRIPTIONS</h1>

          <img src="images/cross.png" class="close">

        <p class="form-error">Tu n'as pas renseigné ton nom</p>

      </div>
    <?php
    }
    if(isset($_SESSION['error']) && $_SESSION['error'] == 2){
      ?>
      <div class="inscriptions_overlay is-visible is-open"></div>
      <div class="inscriptions_form is-visible is-open" style="height:15%;">
        <h1>_MODALITÉS D'INSCRIPTIONS</h1>

          <img src="images/cross.png" class="close">

        <p class="form-error">Tu n'as pas renseigné ton prénom</p>

      </div>
    <?php
    }
    if(isset($_SESSION['error']) && $_SESSION['error'] == 3){
      ?>
      <div class="inscriptions_overlay is-visible is-open"></div>
      <div class="inscriptions_form is-visible is-open" style="height:20%;">
        <h1>_MODALITÉS D'INSCRIPTIONS</h1>

          <img src="images/cross.png" class="close">

        <p class="form-error">Tu n'as pas renseigné ton adresse mail</p>

      </div>
    <?php
    }
    if(isset($_SESSION['error']) && $_SESSION['error'] == 4){
      ?>
      <div class="inscriptions_overlay is-visible is-open"></div>
      <div class="inscriptions_form is-visible is-open" style="height:15%;">
        <h1>_MODALITÉS D'INSCRIPTIONS</h1>

          <img src="images/cross.png" class="close">

        <p class="form-error">Tu n'as pas renseigné ta formation</p>

      </div>
    <?php
    }
    if(isset($_SESSION['error']) && $_SESSION['error'] == 5){
      ?>
      <div class="inscriptions_overlay is-visible is-open"></div>
      <div class="inscriptions_form is-visible is-open" style="height:20%;">
        <h1>_MODALITÉS D'INSCRIPTIONS</h1>

          <img src="images/cross.png" class="close">

        <p class="form-error">Tu n'as pas renseigné la catégorie de ton oeuvre</p>

      </div>
    <?php
    }
    if(isset($_SESSION['error']) && $_SESSION['error'] == 6){
      ?>
      <div class="inscriptions_overlay is-visible is-open"></div>
      <div class="inscriptions_form is-visible is-open" style="height:20%;">
        <h1>_MODALITÉS D'INSCRIPTIONS</h1>

          <img src="images/cross.png" class="close">

        <p class="form-error">Tu n'as pas renseigné le titre de ton oeuvre</p>

      </div>
    <?php
    }
    if(isset($_SESSION['error']) && $_SESSION['error'] == 7){
      ?>
      <div class="inscriptions_overlay is-visible is-open"></div>
      <div class="inscriptions_form is-visible is-open" style="height:20%;">
        <h1>_MODALITÉS D'INSCRIPTIONS</h1>

          <img src="images/cross.png" class="close">

        <p class="form-error">Tu n'as pas renseigné l'adresse de téléchargement de ton oeuvre</p>

      </div>
    <?php
    }
    if(isset($_SESSION['error']) && $_SESSION['error'] == 8){
      ?>
      <div class="inscriptions_overlay is-visible is-open"></div>
      <div class="inscriptions_form is-visible is-open" style="height:20%;">
        <h1>_MODALITÉS D'INSCRIPTIONS</h1>

          <img src="images/cross.png" class="close">

        <p class="form-error">Tu n'as pas renseigné la description de ton oeuvre</p>

      </div>
    <?php
    }
    if(isset($_SESSION['success']) && $_SESSION['success'] == 1){
      ?>
      <div class="inscriptions_overlay is-visible is-open"></div>
      <div class="inscriptions_form is-visible is-open" style="height:15%;">
        <h1>_MODALITÉS D'INSCRIPTIONS</h1>

          <img src="images/cross.png" class="close">

        <p class="form-success">Ton oeuvre a été inscrite !</p>

      </div>
    <?php
    }
  ?>



    <div id="myNav" class="overlay">

        <a class="closebtn">&times;</a>

        <div class="overlay-content">

            <a href="#fest1" id="hamb1">PRÉSENTATION</a>
            <a href="#insc3" id="hamb2">INSCRIPTIONS</a>
            <a href="#cat4" id="hamb3">CATÉGORIES</a>
            <a href="#footer5" id="hamb4">LIEU ET CONTACT</a>

            <div class="overlay_rs">

                <a href="https://www.facebook.com/frammiawards/" target="_blank"><img src="images/facebook.svg" class="iconers"></a>
                <a href="https://www.instagram.com/frammi_awards/" target="_blank"><img src="images/insta.svg" class="iconers"></a>
                <a href="https://www.youtube.com/channel/UCj_bS_FXrKg-RB8Q2Nmj_Zg" target="_blank"><img src="images/youtube.svg" class="iconers" ></a>

            </div>



        </div>

    </div>

    <div class="inscriptions_overlay" id="inscriptions_overlay"></div>
      <div class="inscriptions_form" id="inscriptions_form">

        <h1>_MODALITÉS D'INSCRIPTIONS</h1>

          <img src="images/cross.png" class="close">

        <form method="post" action="traitement.php" class="form_inscriptions">

        <div class="formblock">

            <div class="nom_prenom">

            <input type="text" name="nom" placeholder="Nom" id="inputname"/>
            <input type="text" name="prenom" placeholder="Prénom" id="inputprenom" />

            </div>

            <input type="text" name="mail" id="inputemail" placeholder="E-mail" />

            <input type="text" name="formation" id="inputformation" placeholder="Formation (DUT MMI1, DUT MMI2, LPTSI)" />

            <select name="categorie">

                <option class="select_text" value="none">CHOISISSEZ VOTRE CATÉGORIE</option>
                <option class="select_text" value="av">AUDIOVISUEL</option>
                <option class="select_text" value="graph">GRAPHISME</option>
                <option class="select_text" value="prog">PROGRAMMATION</option>
                <option class="select_text" value="com">COMMUNICATION</option>

            </select>

            <!--
            <div class="btn_categories">

                <input type="button" id="btngraph" name="graphisme" value="GRAPHISME">
                <input type="button" id="btnprog" name="programmation" value="PROGRAMMATION">
                <input type="button" id="btncom" name="communication" value="COMMUNICATION">
                <input type="button" id="btnav" name="audiovisuel" value="AUDIOVISUEL">

            </div>
            -->


            <input type="text" name="titre" id="titrerea" placeholder="Titre de la réalisation" />

            <input type="text" name="lien" id="linktel" placeholder="Lien de téléchargement" />

            <textarea name="description" placeholder="Description" id="descta" rows="5"></textarea>

            <div id ="envoyerbtn"><input type="submit" value="Envoyer" /></div>

        </div>





        </form>


      </div>


    <div class="content1">

     <header> <!-- Début du header -->

        <div class="header_content">

        <ul id="topmenu">

            <li id="onemenu"><a href="#fest1">PRÉSENTATION </a></li>
            <li id="onemenu"><a href="#insc3">INSCRIPTIONS </a></li>
            <li id="onemenu"><a href="#cat4">CATÉGORIES </a></li>
            <li id="onemenu"><a href="#footer5">LIEU & CONTACT </a></li>

        </ul>

        <div class="hamburgermenu">

            <div id="hamburger"> <!-- Menu hamburger, à droite -->

				        <span></span>

            </div>

        </div>

        <div class="principal_content">

            <div class="content_left">

                <a href="https://www.facebook.com/frammiawards/" target="_blank"><img src="images/facebook.svg" class="iconers"></a>
                <a href="https://www.instagram.com/frammi_awards/" target="_blank"><img src="images/insta.svg" class="iconers"></a>
                <a href="https://www.youtube.com/channel/UCj_bS_FXrKg-RB8Q2Nmj_Zg" target="_blank"><img src="images/youtube.svg" class="iconers"></a>

            </div>

            <div class="content_middle">

                <img src="images/logowhite.png" id="logoframmi">

            </div>

            <div class="content_right">

                <h1>JEUDI</h1>

                <h2 class="ml1">





                        14 MARS





                </h2>

                <h3>Le Manège, <span id="chambery">Chambéry</span></h3>

            </div>


        </div>



        <div class="anniv">

            <p>Venez fêter cet anniversaire avec nous !</p>

        </div>

    </div>

    </header>

    <img src="images/couronne2.png" class="couronne">

    </div>



    <!-- Fin du haut de page -->







     <section class="contenu" id="fest1">

         <div class="wrap">

            <div class="festival">

                <h1>_ LE FESTIVAL DES <span>FRAMMI AWARDS</span></h1>

                <div id="typed-strings">

                    <p>récompense les meilleures réalisations des étudiants en DUT MMI</p>
                    <p>fête ses 10 ans</p>
                    <p>voit les choses en grand</p>


                </div>



                <!--<p>récompense les meilleures réalisations des étudiants en DUT MMI</p>-->

                <span id="typed"></span>

            </div>

            <div class="desc">

                <div class="salle" data-aos="fade-up" data-aos-duration="400">


                    <img src="images/icones/place.png" id="iconedesc" class="pngplace">

                    <h2>UNE PLUS GRANDE SALLE</h2>

                    <p>Le Manège, Chambéry</p>


                </div>


                <div class="buffet" data-aos="fade-up" data-aos-duration="800">


                    <img src="images/icones/buffet.png" id="iconedesc" class="pngbuffet">

                    <h2>UN PLUS GRAND BUFFET</h2>

                    <p>Pétillant et petits fours</p>


                </div>


                <div class="categories" data-aos="fade-up" data-aos-duration="1200">


                    <img src="images/icones/categories.png" id="iconedesc" class="pngcategories">

                    <h2>PLUS DE CATÉGORIES</h2>

                    <p>Il y en aura pour tout le monde !</p>


                </div>



            </div>

             <img src="images/left-leaf2.png" id="left-leaf" data-aos="flip-up" data-aos-duration="1000">

            <div class="box_festival" data-aos="flip-up" data-aos-duration="1000">



                <p id="pres_festival">

                    Il y a maintenant <span>10 ans</span>, le département MMI de l’<span>IUT</span> de Chambéry créait cet événement <span>récompensant des réalisations audiovisuelles</span> faites par des étudiants de France. Aujourd’hui, on lui donne un coup de jeune, de nouvelles disciplines seront récompensées par un jury composé de professionnels. Nous décidons pour la première fois de mettre en avant principalement les <span>diverses compétences du département MMI</span> de Chambéry, avec un concours ouvert à ses étudiants de MMI et de la LPTSI.

                </p>




            </div>



             <img src="images/right-leaf2.png" id="right-leaf" data-aos="flip-up" data-aos-duration="1000">



            <div class="aftermovie">

                <div class="aftermovie_left">

                    <h2>RETOUR EN IMAGES</h2>
                    <p>avec l'aftermovie de l'édition 2018</p>

                </div>

                <div class="video-container">

                    <iframe id="ytvideo" src="https://www.youtube.com/embed/z_3HuDX-pJg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>

            </div>

        </div>





     </section>



    <div class="inscriptions" id="insc3">

            <div class="wrap">

                <div class="inscriptions_left">

                    <h2>FUTUR PARTICIPANT ?</h2>
                    <p>C'est par ici !</p>

                </div>

                <div class="inscriptions_right">

                    <button class="btn_insc" id="myBtn"><h2>INSCRIPTION</h2></button>




                    <a href="reglement_frammi.pdf"><button class="btn_reglement"><h2>RÉGLEMENT</h2></button></a>


                </div>


            </div>

        </div>



        <div class="jurys" id="cat4">

            <div class="wrap">

                <h1>_4 CATÉGORIES, <span>4 JURYS</span></h1>

                    <p id="categories_desc">

                        Cette année, c'est nouveau ! La compétition est ouverte à <span>tous les créatifs</span> de MMI, avec <span>3 nouvelles catégories</span>, en plus de l'audiovisuel : le <span>graphisme</span>, la <span>communication</span> et la <span>programmation</span>. Nouvelle catégorie veut dire nouveau jury, pour évaluer les créations à leur juste valeur. A la fin de ce <span>compte à rebours</span>, nous vous dévoilerons les jurys de cette année !

                    </p>

                <div class="countdown" data-date="2019-01-15 00:00:00"></div>



                <div class="categories2">

                    <div class="com">

                        <h1>COMMUNICATION</h1>

                        <img src="images/marie.png" id="imgcategorie">

                        <h2>Marie <span>Colin</span></h2>

                        <p>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis

                        </p>


                    </div>

                    <div class="graph">

                        <h1>GRAPHISME</h1>

                        <img src="images/yann.png" id="imgcategorie">

                        <h2>Yann <span>Hirt</span></h2>

                        <p>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis

                        </p>

                    </div>

                    <div class="prog">

                        <h1>PROGRAMMATION</h1>

                        <img src="images/thibaut.png" id="imgcategorie">

                        <h2>Thibaut <span>Marc</span></h2>

                        <p>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis

                        </p>



                    </div>

                    <div class="av">

                        <h1>AUDIOVISUEL</h1>

                        <img src="images/pauline.png" id="imgcategorie">

                        <h2>Pauline <span>Estève</span></h2>

                        <p>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis

                        </p>


                    </div>





                </div>

            </div>


        </div>


    <footer>

        <div class="wrap" id="footer5">

              <div class="map">

                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.3238830986948!2d5.924582315334785!3d45.563925079102155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba8fc865aeb47%3A0x7daf6001a23c50fa!2sCentre+de+Congr%C3%A8s+Le+Man%C3%A8ge!5e0!3m2!1sfr!2sfr!4v1543226030750" frameborder="0" id="mapcongres" style="border:0" allowfullscreen></iframe>



            </div>

            <div class="contact">

                <h1>_CONTACT</h1>

                <h2>frammiawards@gmail.com</h2>

                <img src="images/fewzblanc.png" id="logofewz">

                <p>Tous droits réservés - Agence Fewz 2019</p>

                <div class="logos">

                    <img src="images/logoMMI.png" id="logosmmi"><img src="images/logoIUT.png"  id="logosmmi">

                </div>

            </div>

        </div>


    </footer>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/dynamics.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/typed.js-master/lib/typed.min.js"></script>
    <script type="text/javascript" src="js/TimeCircles.js"></script>
    <script src="js/fakeLoader.min.js"></script>

    <script>

            var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            typeSpeed: 40,
            startDelay: 1200,
            backSpeed: 20,
	       backDelay: 500,
            loop: true,
          cursorChar: "I",

        });

         </script>

        <script src="js/classie.js"></script>
		    <script src="js/dynamics.min.js"></script>
		    <script src="js/main.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/script2.js"></script>


</body>
</html>

<?php
session_destroy();
?>
