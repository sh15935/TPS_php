<?php
require_once "../Acces_BD/Administrateur.php";
session_start();
$_SESSION['etudiants']=Lister();
$action="Afficher";
if(isset($_GET['action']))
$action=$_GET['action'];

switch($action)
{
case "Ajouter": Ajouter($_POST); 
    header('Location:Administrateur.php');
    break;
case "Modifier": Modifier($_POST);
    header('Location:Administrateur.php'); 
    break;
case "Supprimer": Supprimer($_GET['code']); 
    header('Location:Administrateur.php');
    break;
case "Modifier_password":
    Modifier_password($_POST['code'],$_POST['nouveau_password']); 
    header('Location:Administrateur.php');
    break;
default: header('Location:../IHM/Administrateur/index.php');
}


?>
