<?php

session_start();

try {
  $bdd = new PDO('mysql:host=localhost;dbname=gsb1;charset=utf8', 'root', '');
}
catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

$login = $_POST['login'];
$password = $_POST['password'];

if(isset($_POST["submit"])) {
  if (empty ($login)) {
    echo "Entrez un login !";
  }
  if (empty ($password)) {
    echo "Entrez un password !";
  }
}

$reponse = $bdd->prepare('INSERT INTO login WHERE login =:login AND password =:password');
$reponse->bindParam(':login', $login);
$reponse->bindParam(':password', $password);

$reponse->execute();



?>