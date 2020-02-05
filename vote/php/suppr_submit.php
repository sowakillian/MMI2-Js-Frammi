<?php

require('../bdd/connect.php');

$id_oeuvre = $_GET['id_oeuvre'];

$bdd->exec('DELETE FROM submit WHERE id_submit = "'.$id_oeuvre.'"');

header('location:../submit.php');
exit();

 ?>
