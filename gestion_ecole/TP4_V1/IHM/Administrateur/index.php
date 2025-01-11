<?php
require_once "../../Acces_BD/Administrateur.php";
session_start();
$etudiants=$_SESSION['etudiants'];
?>
<center>
    <table border="1">
      <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th><a href="form.php?action=Ajouter">Ajouter</a></th>
      </tr>
<?php 
$students=mysqli_fetch_assoc($etudiants);
foreach($students as $line) {?>
    <tr>
        <td><? $line['code'] ?></td>
        <td><? $line['nom'] ?></td>
        <td><? $line['prenom'] ?></td>
        <td><? $line['email'] ?></td>
        <td><a href="affichage.php">Voir_Detail</a></td>
        <td><a href="form.php?action=Modifier&code=<?$line['code']?>">Modifier</a></td>
        <td><a href="/Gestions_Actions/Administrateur.php?action=Supprimer">Supp</a></td>
    </tr>
<?php }?>
    </table>
</center>