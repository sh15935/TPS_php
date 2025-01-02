<?php
include_once '../Acces_BD/Visiteur.php';
list($nom, $prenom, $email) = array_values($_POST);
$data = [
    'id' => $_POST['id'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'email' => $_POST['email'],
];
Modifier($data);
header("Location: Afficher.php");
exit();
?>
