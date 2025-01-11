<?php
session_start();
$etudiants=$_SESSION['etudiants'];
if($etudiants[0]==""){
$action="Ajouter";
} else {
$action="Modifier";
}
?>


<center>
    <form action="../../Gestions_Actions/Administrateur.php?action=<?=$action?>" method="post">
    <table>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" value="<?=$etudiants[1]?>" id=""></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><input type="text" name="prenom" value="<?=$etudiants[2]?>" id=""></td>
            </tr>
            <tr>
                <td>Sexe</td>
                <td><input type="text" name="sexe" value="<?=$etudiants[3]?>"></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="text" name="photo" value="<?=$etudiants[4]?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?=$etudiants[5]?>" id=""></td>
            </tr>
            <tr>
                <td>Langues</td>
                <td><input type="text" name="langues" value="<?=$etudiants[6]?>"></td>
            </tr>
            <tr>
                <td>Specialite</td>
                <td><input type="text" name="specialite" value="<?=$etudiants[7]?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>
    </form>
</center>