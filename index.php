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

<body>

<a href="logout.php" class="logout">LOGOUT</a>

</body>
</html>