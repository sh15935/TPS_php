<?php
require_once "../Acces_BD/Etudiant.php";
session_start();
$code=$_SESSION['code'];
$_SESSION['etudiant']=Afficher($code);
$action="Afficher";
if(isset($_GET['action']))
$action=$_GET['action'];

switch($action)
{
case "Modifier_photo":
    Modifier_photo($_POST['code'],$_POST['nouvelle_photo']);
    header('Location:Etudiant.php');
    break;
case "Modifier_password":
    $etudiant = Afficher($_POST['code']);
    //var_dump($_POST['code'], $etudiant['user'] ,$_POST['nouveau_password']);
    Modifier_password($etudiant['user'] ,$_POST['nouveau_password']);
    header('Location:Etudiant.php');
    break;
default: header('Location:../IHM/Etudiant/index.php');
}
?>
