<?php
include_once '../Acces_BD/Visiteur.php';

$data = [
    'id' => $_POST['id'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'email' => $_POST['email'],
];
Modifier($data)
}
?>
