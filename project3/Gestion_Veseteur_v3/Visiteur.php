<?php
require_once 'Acces_BD/Visiteur.php';

$action = $_GET['action'] ?? 'default';

switch ($action) {
    case 'afficher':
        header("Location: IHM/affichage.php");
        exit();

    case 'ajouter':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            list($nom, $prenom, $email) = array_values($_POST);
            $data = [
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
            ];
            Ajouter($data);
            header("Location: ?action=afficher");
            exit();
        }
        header("Location: IHM/form_Saisie.php");
        exit();

    case 'modifier':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id' => $_POST['id'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
            ];
            Modifier($data);
            header("Location: ?action=afficher");
            exit();
        }
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            header("Location: IHM/form_edit.php?id=$id");
            exit();
        }
        die("ID non fourni pour la modification.");

    case 'supprimer':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            Supprimer($id);
            header("Location: ?action=afficher");
            exit();
        }
        die("ID non fourni pour la suppression.");

    default:
        die("Action non reconnue.");
}
?>
