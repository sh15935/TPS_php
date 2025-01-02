<?php
require_once '../Acces_BD/Visiteur.php';
$data = Lister();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des visiteurs</title>
</head>
<body>
    <center>
    <h1>Liste des visiteurs</h1>
    <table border="1">
        <tr>
            <th>Num</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($data as $row) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['Prénom']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="../Gestion_Actions/Form_edit.php?id=<?php echo $row['ID']; ?>">Edit</a> |
                <a href="../Gestion_Actions/Supprimer.php?id=<?php echo $row['ID']; ?>">Sup</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <a href="Form_ajout.php">Ajouter un utilisateur</a>
    </center>
</body>
</html>