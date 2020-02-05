<?php

require('header.php');
require('php/script_count_oeuvre.php');
require('php/script_count_votant.php');
require('php/script_count_av.php');
require('php/script_count_graph.php');
require('php/script_count_com.php');
require('php/script_count_prog.php');

?>
<script>
var config_oeuvre = {
type: 'pie',
data: {
  datasets: [{
    data: [
      <?php echo $nb_oeuvre_av; ?>,
      <?php echo $nb_oeuvre_com; ?>,
      <?php echo $nb_oeuvre_graph; ?>,
      <?php echo $nb_oeuvre_prog; ?>,
    ],
    backgroundColor: [
      window.chartColors.red,
      window.chartColors.orange,
      window.chartColors.yellow,
      window.chartColors.green,
    ],
    label: 'Oeuvres inscrites'
  }],
  labels: [
    'Audiovisuel',
    'Communication',
    'Graphisme',
    'Programmation',
  ]
},
options: {
  responsive: true
}
};

var config_votants = {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        <?php echo $nb_votant_done; ?>,
        <?php echo $nb_votant_undone; ?>,
      ],
      backgroundColor: [
        window.chartColors.green,
        window.chartColors.red,
      ],
      label: 'Votants inscrits'
    }],
    labels: [
      'Participants ayant voté',
      'Participants n\'ayant pas voté',
    ]
  },
  options: {
    responsive: true
  }
};

var config_av = {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        <?php
        $name_oeuvre_av = $_SESSION['name_oeuvre_av'];
        $vote_oeuvre_av = $_SESSION['vote_oeuvre_av'];

        for ($i = 1; $i <= count($name_oeuvre_av); $i++){
          echo $vote_oeuvre_av[$i].',';
        }
        ?>
      ],
      backgroundColor: [
        <?php
        for ($i = 1; $i <= count($name_oeuvre_av); $i++){
          $random = floor(rand(0,4));
          if ($random == 0){
            echo 'window.chartColors.green,';
          }
          elseif ($random == 1){
            echo 'window.chartColors.red,';
          }
          elseif ($random == 2){
            echo 'window.chartColors.blue,';
          }
          elseif ($random == 3){
            echo 'window.chartColors.yellow,';
          }
          elseif ($random == 4){
            echo 'window.chartColors.orange,';
          }
        }
        ?>
      ],
      label: 'Vote oeuvre AV'
    }],
    labels: [
      <?php
      for ($i = 1; $i <= count($name_oeuvre_av); $i++){
        echo "'".$name_oeuvre_av[$i]."',";
      }
      ?>
    ]
  },
  options: {
    responsive: true
  }
};

var config_graph = {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        <?php
        $name_oeuvre_graph = $_SESSION['name_oeuvre_graph'];
        $vote_oeuvre_graph = $_SESSION['vote_oeuvre_graph'];

        for ($i = 1; $i <= count($name_oeuvre_graph); $i++){
          echo $vote_oeuvre_graph[$i].',';
        }
        ?>
      ],
      backgroundColor: [
        <?php
        for ($i = 1; $i <= count($name_oeuvre_graph); $i++){
          $random = floor(rand(0,4));
          if ($random == 0){
            echo 'window.chartColors.green,';
          }
          elseif ($random == 1){
            echo 'window.chartColors.red,';
          }
          elseif ($random == 2){
            echo 'window.chartColors.blue,';
          }
          elseif ($random == 3){
            echo 'window.chartColors.yellow,';
          }
          elseif ($random == 4){
            echo 'window.chartColors.orange,';
          }
        }
        ?>
      ],
      label: 'Vote oeuvre AV'
    }],
    labels: [
      <?php
      for ($i = 1; $i <= count($name_oeuvre_graph); $i++){
        echo "'".$name_oeuvre_graph[$i]."',";
      }
      ?>
    ]
  },
  options: {
    responsive: true
  }
};

var config_com = {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        <?php
        $name_oeuvre_com = $_SESSION['name_oeuvre_com'];
        $vote_oeuvre_com = $_SESSION['vote_oeuvre_com'];

        for ($i = 1; $i <= count($name_oeuvre_com); $i++){
          echo $vote_oeuvre_com[$i].',';
        }
        ?>
      ],
      backgroundColor: [
        <?php
        for ($i = 1; $i <= count($name_oeuvre_com); $i++){
          $random = floor(rand(0,4));
          if ($random == 0){
            echo 'window.chartColors.green,';
          }
          elseif ($random == 1){
            echo 'window.chartColors.red,';
          }
          elseif ($random == 2){
            echo 'window.chartColors.blue,';
          }
          elseif ($random == 3){
            echo 'window.chartColors.yellow,';
          }
          elseif ($random == 4){
            echo 'window.chartColors.orange,';
          }
        }
        ?>
      ],
      label: 'Vote oeuvre com'
    }],
    labels: [
      <?php
      for ($i = 1; $i <= count($name_oeuvre_com); $i++){
        echo "'".$name_oeuvre_com[$i]."',";
      }
      ?>
    ]
  },
  options: {
    responsive: true
  }
};

var config_prog = {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        <?php
        $name_oeuvre_prog = $_SESSION['name_oeuvre_prog'];
        $vote_oeuvre_prog = $_SESSION['vote_oeuvre_prog'];

        for ($i = 1; $i <= count($name_oeuvre_prog); $i++){
          echo $vote_oeuvre_prog[$i].',';
        }
        ?>
      ],
      backgroundColor: [
        <?php
        for ($i = 1; $i <= count($name_oeuvre_prog); $i++){
          $random = floor(rand(0,4));
          if ($random == 0){
            echo 'window.chartColors.green,';
          }
          elseif ($random == 1){
            echo 'window.chartColors.red,';
          }
          elseif ($random == 2){
            echo 'window.chartColors.blue,';
          }
          elseif ($random == 3){
            echo 'window.chartColors.yellow,';
          }
          elseif ($random == 4){
            echo 'window.chartColors.orange,';
          }
        }
        ?>
      ],
      label: 'Vote oeuvre prog'
    }],
    labels: [
      <?php
      for ($i = 1; $i <= count($name_oeuvre_prog); $i++){
        echo "'".$name_oeuvre_prog[$i]."',";
      }
      ?>
    ]
  },
  options: {
    responsive: true
  }
};


window.onload = function() {
  var ctx_votants = document.getElementById('graph_votants').getContext('2d');
  window.myPie = new Chart(ctx_votants, config_votants);
  var ctx_oeuvre = document.getElementById('graph_oeuvre').getContext('2d');
  window.myPie = new Chart(ctx_oeuvre, config_oeuvre);
  var ctx_av = document.getElementById('vote_audiovisuel').getContext('2d');
  window.myPie = new Chart(ctx_av, config_av);
  var ctx_com = document.getElementById('vote_com').getContext('2d');
  window.myPie = new Chart(ctx_com, config_com);
  var ctx_graph = document.getElementById('vote_graph').getContext('2d');
  window.myPie = new Chart(ctx_graph, config_graph);
  var ctx_prog = document.getElementById('vote_prog').getContext('2d');
  window.myPie = new Chart(ctx_prog, config_prog);
};
</script>

   <section id="Title">
     <h2>Statistiques</h2>
   </section>

   <section id="content">
     <h4>Participants inscrits</h4>
     <?php require('php/script_count_oeuvre.php'); ?>
     <div style="width:40%">
       <canvas id="graph_votants"></canvas>
     </div>
  </section>
   <section id="content" style="margin-top:7%">
     <h4>Oeuvres inscrites</h4>
     <div id="canvas-holder" style="width:40%">
		     <canvas id="graph_oeuvre"></canvas>
	   </div>
  </section>
  <section id="content" style="margin-top:7%">
    <h4>Vote audiovisuel</h4>
    <div id="canvas-holder" style="width:40%">
        <canvas id="vote_audiovisuel"></canvas>
    </div>
 </section>
 <section id="content" style="margin-top:7%">
   <h4>Vote communication</h4>
   <div id="canvas-holder" style="width:40%">
       <canvas id="vote_com"></canvas>
   </div>
</section>
<section id="content" style="margin-top:7%">
  <h4>Vote programmation</h4>
  <div id="canvas-holder" style="width:40%">
      <canvas id="vote_prog"></canvas>
  </div>
</section>
<section id="content" style="margin-top:7%">
  <h4>Vote graphisme</h4>
  <div id="canvas-holder" style="width:40%">
      <canvas id="vote_graph"></canvas>
  </div>
</section>

   <footer>
     <p>Réalisé pour FRAMMI AWARDS 10EME EDITION par l'agence FEWZ | 2018-2019</p>
   </footer>
 </body>
</html>

<?php
  unset($_SESSION['name_oeuvre_av']);
  unset($_SESSION['nb_oeuvre_av']);
 ?>
