<?php
require_once "../../Acces_BD/Etudiant.php";
session_start();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
$code = isset($_GET['code']) ? $_GET['code'] : null;

// Prioritize `code` if provided, otherwise fallback to `user`.
if ($code) {
    $etudiant = Afficher($code);
} elseif ($user) {
    $etudiant = GetEtudiantByUser($user);
} else {
    die("Error: No valid user or code provided.");
}
?>

<center>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Photo</th>
            <th>Email</th>
            <th>Langues</th>
            <th>Specialite</th>
            <th>Actions</th>
        </tr>
        <?php 
        if ($etudiant) { ?>
            <tr>
                <td><?= htmlspecialchars($etudiant['code']); ?></td>
                <td><?= htmlspecialchars($etudiant['nom']); ?></td>
                <td><?= htmlspecialchars($etudiant['prenom']); ?></td>
                <td><?= htmlspecialchars($etudiant['sexe']); ?></td>
                <td><img src="<?= htmlspecialchars($etudiant['photo']); ?>" alt="" width="100" /></td>
                <td><?= htmlspecialchars($etudiant['email']); ?></td>
                <td><?= htmlspecialchars($etudiant['langues']); ?></td>
                <td><?= htmlspecialchars($etudiant['specialite']); ?></td>
                <td>
                    <a href="form.php?action=Modifier_photo&code=<?= htmlspecialchars($etudiant['code']); ?>">Modifier Photo</a><br>
                    <a href="form.php?action=Modifier_password&code=<?= htmlspecialchars($etudiant['code']); ?>">Modifier Password</a>
                </td>
            </tr>
        <?php } else { ?>
            <tr>
                <td colspan="9">Aucun étudiant trouvé.</td>
            </tr>
        <?php } ?>
    </table>
</center>
