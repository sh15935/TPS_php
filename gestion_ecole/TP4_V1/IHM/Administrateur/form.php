<?php
require_once "../../Acces_BD/Administrateur.php";
session_start();

$etudiants = $_SESSION['etudiants'] ?? [];
$action = $_GET['action'] ?? 'Ajouter';

$code = '';
$nom = '';
$prenom = '';
$sexe = '';
$photo = '';
$email = '';
$langues = '';
$specialite = '';
$user = '';

if ($action === 'Modifier' && isset($_GET['code'])) {
    foreach ($etudiants as $etudiant) {
        if ($etudiant['code'] === $_GET['code']) {
            $code = htmlspecialchars($etudiant['code']);
            $nom = htmlspecialchars($etudiant['nom']);
            $prenom = htmlspecialchars($etudiant['prenom']);
            $sexe = htmlspecialchars($etudiant['sexe']);
            $photo = htmlspecialchars($etudiant['photo']);
            $email = htmlspecialchars($etudiant['email']);
            $langues = htmlspecialchars($etudiant['langues']);
            $specialite = htmlspecialchars($etudiant['specialite']);
            $user = htmlspecialchars($etudiant['user']);
            break;
        }
    }
}
?>
<center>
    <form action="../../Gestions_Actions/Administrateur.php?action=<?= $action ?>" method="post">
        <table>
            <input type="hidden" name="code" value="<?= $code ?>">

            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" value="<?= $nom ?>" required></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><input type="text" name="prenom" value="<?= $prenom ?>" required></td>
            </tr>
            <tr>
                <td>Sexe</td>
                <td><input type="text" name="sexe" value="<?= $sexe ?>" required></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="text" name="photo" value="<?= $photo ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?= $email ?>" required></td>
            </tr>
            <tr>
                <td>Langues</td>
                <td><input type="text" name="langues" value="<?= $langues ?>" required></td>
            </tr>
            <tr>
                <td>Specialité</td>
                <td><input type="text" name="specialite" value="<?= $specialite ?>" required></td>
            </tr>
            <tr>
                <td>User</td>
                <td><input type="text" name="user" value="<?= $user ?>" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>
    </form>
</center>
