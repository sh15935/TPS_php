<?php
require_once "./Acces_BD/Administrateur.php";
session_start();
$etudiants=$_SESSION['etudiants'];
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
      </tr>
<?php 
$students=mysqli_fetch_assoc($etudiants);
foreach($students as $line) {?>
    <tr>
        <td><? $line['code'] ?></td>
        <td><? $line['nom'] ?></td>
        <td><? $line['prenom'] ?></td>
        <td><? $line['sexe'] ?></td>
        <td><? $line['photo'] ?></td>
        <td><? $line['email'] ?></td>
        <td><? $line['langues'] ?></td>
        <td><? $line['specialite'] ?></td>
    </tr>
<?php }?>
    </table>
</center>