<!DOCTYPE html>
<html>
    <head>
      <link href="style.css" rel="stylesheet">

</head>
<body>
 <div class="form">
    
<form class="login-form" name="form1" method="post" action="islogged.php">
<input name="login" placeholder="Utilisateur" type="text" id="login" style="margin-top:30px;">
<input name="password" type="password" placeholder="Mot de passe" id="password">
<input type="submit" name="submit" value="Se connecter">
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

<a href="createAccount.php">Créer un compte</a>
</form>
</div>
</body>
</html>



