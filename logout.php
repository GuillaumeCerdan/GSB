<?php
session_start();
$_SESSION = array();
session_destroy();

setcookie('logged', '');
header('Location: login.php');
?>