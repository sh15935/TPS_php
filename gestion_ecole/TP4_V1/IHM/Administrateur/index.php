<?php
require_once "../../Acces_BD/Administrateur.php";
session_start();
$etudiants = $_SESSION['etudiants'];
?>
<center>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Langues</th>
            <th>Specialite</th>
            <th><a href="form.php?action=Ajouter">Ajouter</a></th>
        </tr>
        <?php
        foreach ($etudiants as $line) { ?>
            <tr>
                <td><?= htmlspecialchars($line['code']); ?></td>
                <td><?= htmlspecialchars($line['nom']); ?></td>
                <td><?= htmlspecialchars($line['prenom']); ?></td>
                <td><?= htmlspecialchars($line['email']); ?></td>
                <td><img src="<?= htmlspecialchars($line['photo']); ?>" alt="Photo" width="100"></td>
                <td><?= htmlspecialchars($line['langues']); ?></td> <!-- Display languages -->
                <td><?= htmlspecialchars($line['specialite']); ?></td> <!-- Display specialty -->
                <td><a href="form.php?action=Modifier&code=<?= htmlspecialchars($line['code']); ?>">Modifier</a></td>
                <td><a href="../../Gestions_Actions/Administrateur.php?action=Supprimer&code=<?= htmlspecialchars($line['code']); ?>">Supp</a></td>
            </tr>
        <?php } ?>
    </table>
</center>
