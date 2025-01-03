<?php
$link = mysqli_connect('localhost', 'root', '', 'Gestion_visiteurs');
$req = "select * from VISITEURS";
$res = mysqli_query($link, $req);
?>
<center>
    <h2>Données soumises :</h2>
    <table border='1'>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
        <?php while($row = mysqli_fetch_array($res)) { ?>
        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td>
                <a href="editer.php?id=<?php echo $row['ID']; ?>">Edit</a>
                <a href="supprimer.php?id=<?php echo $row['ID']; ?>">Sup</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <a href="saisie.php?code=<?= $code ?>">>>Ajouter un visiteur</a>
</center>
