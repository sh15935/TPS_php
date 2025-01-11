<?php
require_once "../Acces_BD/Login.php";
$username=$_POST['username'];
$password=$_POST['password'];
login($username,$password);
?>
