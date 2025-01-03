<?php
require_once '../Acces_BD/Visiteur.php';
$data = Lister();
?>
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
            <a href="../Visiteur.php?action=modifier&id=<?php echo $row['id']; ?>">Edit</a> |
            <a href="../Visiteur.php?action=supprimer&id=<?php echo $row['id']; ?>">Sup</a>
       </td>
    </tr>
    <?php } ?>
</table>
<a href="../Visiteur.php?action=ajouter">Ajouter un utilisateur</a>
</center>