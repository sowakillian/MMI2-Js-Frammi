// JS  développé par Sowa Killian, TP11

// Éléments JS intéressants ici: suppression de div onclick : .remove()), récupération d'un attribut :  .attr(), action pour plusieurs div avec la même classe :each(function(), next, prev, parent, children (pour se déplacer dans les div en Jquery), sommes, concaténations, slideUp

$(document).ready(function() // ouverture du doc JS

{

    $('.countdown').TimeCircles();
    $(".countdown").TimeCircles({bg_width: 0.7});

    $(".countdown").TimeCircles({ time: {
    Days: { color: "#eab830" },
    Hours: { color: "#991914" },
    Minutes: { color: "#eab830" },
    Seconds: { color: "#991914" }

}});


    AOS.init();

    $("#fakeLoader").fakeLoader({

        timeToHide:1000, //Time in milliseconds for fakeLoader disappear

        zIndex:"999",//Default zIndex

        spinner:"spinner6",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'

        bgColor:"#991914", //Hex, RGB or RGBA

    });

    $(".flbackdrop").remove();

    $('.ml1 .letters').each(function()

        {

            $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));

        });

    anime.timeline()

    .add({

        targets: '.ml1 .letter',
        scale: [0.3,1],
        opacity: [0,1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 5000,
        delay: function(el, i) {

            return 70 * (i+1)

        }

    })

    $('#hamburger').click(function() //ouverture du hamburger menu

            {

                $("#myNav").width("100%");
                $("body").css("overflow","hidden");


            });

    $('.closebtn, #hamb1, #hamb2, #hamb3, #hamb4').click(function() //fermeture du hamburgermenu

            {

                $("#myNav").width("0%");
                $("body").css('overflow','visible');

            });


    $('#myBtn').click(function() //fermeture du hamburgermenu

            {

                $('.inscriptions_form').addClass('is-visible');
                $('.inscriptions_overlay').addClass('is-visible');
                $("body").css("overflow","hidden");

                setTimeout(function () {

                    $('.inscriptions_form').addClass('is-open');
                    $('.inscriptions_overlay').addClass('is-open');

                }, 20);

            });



    $('.close').click(function() //fermeture du hamburgermenu

            {


                $("body").css('overflow','visible');


                    $('.inscriptions_form').removeClass('is-visible');
                    $('.inscriptions_overlay').removeClass('is-visible');



            });

    function cateabregees(){

    var windowwidth = $(window).width();

    if (windowwidth <= 830)

        {

            $("#btngraph").prop('value', 'GRAPH');
            $("#btnprog").prop('value', 'PROG');
            $("#btncom").prop('value', 'COM');
            $("#btnav").prop('value', 'AV');
            $("#descta").prop('rows', '3');

        }

    else {

            $("#btngraph").prop('value', 'GRAPHISME');
            $("#btnprog").prop('value', 'PROGRAMMATION');
            $("#btncom").prop('value', 'COMMUNICATION');
            $("#btnav").prop('value', 'AUDIOVISUEL');
            $("#descta").prop('rows', '5');

         }

    }


    function presfestival(){

    var windowwidth2 = $(window).width();

    if (windowwidth2 <= 480)

        {

            $("#pres_festival").html('Il y a maintenant <span>10 ans</span>, le département MMI de l’<span>IUT</span> de Chambéry créait cet événement <span> récompensant des réalisations audiovisuelles</span> faites par des étudiants de France. Aujourd’hui, nous décidons pour la première fois de mettre en avant principalement les <span>diverses compétences du département MMI</span> de Chambéry, avec un concours ouvert à ses étudiants de MMI et de la LPTSI.');

        }

    else {

            $("#pres_festival").html('Il y a maintenant <span>10 ans</span>, le département MMI de l’<span>IUT</span> de Chambéry créait cet événement <span>récompensant des réalisations audiovisuelles</span> faites par des étudiants de France. Aujourd’hui, on lui donne un coup de jeune, de nouvelles disciplines seront récompensées par un jury composé de professionnels. Nous décidons pour la première fois de mettre en avant principalement les <span>diverses compétences du département MMI</span> de Chambéry, avec un concours ouvert à ses étudiants de MMI et de la LPTSI.');

         }

    }


    $(window).resize(function () {

    cateabregees();//run on every window resize
    presfestival();
    $('.countdown').TimeCircles().rebuild();

    });

    $(document).ready(function () {

    cateabregees();//run when page first loads
    presfestival();

});


















    });
