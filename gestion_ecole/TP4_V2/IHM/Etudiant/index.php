<?php
require_once "../../Acces_BD/Etudiant.php";
session_start();
$etudiant=$_SESSION['etudiant'];
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
$student=mysqli_fetch_assoc($etudiant);
foreach($student as $line) {?>
    <tr>
        <td><? $line['code'] ?></td>
        <td><? $line['nom'] ?></td>
        <td><? $line['prenom'] ?></td>
        <td><? $line['sexe'] ?></td>
        <td><? $line['photo'] ?></td>
        <td><? $line['email'] ?></td>
        <td><? $line['langues'] ?></td>
        <td><? $line['specialite'] ?></td>
        <td><a href="form.php?action=Modifier_photo">ModifierPhoto</a></td>
        <td><a href="form.php?action=Modifier_password">ModifierPassword</a></td>
    </tr>
<?php }?>
    </table>
</center>