<?php
include_once 'Connexion.php';
$conn = Connect();

function Ajouter($data) {
    GLOBAL $conn;
    $req = "INSERT INTO visiteurs (`nom`, `Prénom`, `email`) VALUES ('{$data['nom']}', '{$data['prenom']}', '{$data['email']}')";
    return mysqli_query($conn, $req);
}

function Modifier($data) {
    GLOBAL $conn;
    $req = "UPDATE visiteurs SET nom='{$data['nom']}', Prénom='{$data['prenom']}', email='{$data['email']}' WHERE id='{$data['id']}'";
    return mysqli_query($conn, $req);
}

function Supprimer($id) {
    GLOBAL $conn;
    $req = "DELETE FROM visiteurs WHERE id='$id'";
    return mysqli_query($conn, $req);
}

function Rechercher($id) {
    GLOBAL $conn;
    $req = "SELECT * FROM visiteurs WHERE id='$id'";
    $result = mysqli_query($conn, $req);
    return mysqli_fetch_assoc($result);
}

function Lister() {
    GLOBAL $conn;
    $req = "SELECT * FROM visiteurs";
    $result = mysqli_query($conn, $req);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>
