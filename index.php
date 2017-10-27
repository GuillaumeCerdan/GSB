<?php
session_start();
if ( !isset($_SESSION["logged"])) {
	header('Location: login.php');
}

?>


<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="style.css">

<body class="bck">

	<div class="container2">
		<a href="logout.php" class="logout">LOGOUT</a>
	</div>


	<h1 class="blanc">Informations visiteurs</h1>
	<input name="nom" type="text" >



</body>

</html>