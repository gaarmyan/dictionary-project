<?php ob_start(); ?>
<?php session_start(); ?>
<?php
$_SESSION['user'] = null;
header("Location: login.php");

 ?>
