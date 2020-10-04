<?php
session_start();
#hello to the world
#creative computing society
if(!isset($_SESSION['email']))
	header("location:index.php");
else
	header("location:dashboard.php");
?>
