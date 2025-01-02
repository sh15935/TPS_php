<?php
require_once '../Acces_BD/Visiteur.php';
list($nom, $prenom, $email) = array_values($_POST);
$data = [
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email
];
Ajouter($data);
header("Location: Afficher.php");
exit();
?>
