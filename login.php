<!DOCTYPE html>
<html>
    <head>
      <link href="style.css" rel="stylesheet">
      <!--<script src="scripts/main.js"></script>-->

</head>
<body>
 <div class="form">
    
<form class="login-form" name="form1" method="post" action="islogged.php">
<input name="login" placeholder="Utilisateur" type="text" id="myusername" style="margin-top:30px;">
<input name="password" type="password" placeholder="Mot de passe" id="mypassword">
<input type="submit" name="submit" value="Se connecter">

</form>
</div>
</body>
</html>
<?php
session_start();
if(isset($_SESSION["error"])){
  echo('<span style="color: red;">Nom d\'utilisateur ou mot de passe invalide.</span>');
  $_SESSION = array();
}
if (isset($_SESSION["logged"])) {
  header('Location: index.php');
}
?>


