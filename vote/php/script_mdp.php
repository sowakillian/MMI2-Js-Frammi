<?php

if (!empty($_POST['password'])){
  echo sha1($_POST['password']);
}

 ?>

 <form action="script_mdp.php" method="POST">
   <input type="password" name="password">
   <input type="submit" value="Crypté">
 </form>
