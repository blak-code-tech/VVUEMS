<?php
	session_start();
	unset($_SESSION["id"]);
	unset($_SESSION["fname"]);
	unset($_SESSION["dname"]);
	unset($_SESSION["lname"]);
	unset($_SESSION["email"]);
	unset($_SESSION["phone"]);
	session_destroy();
	header('Location: ../index.php');
?>