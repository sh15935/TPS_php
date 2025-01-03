<?php
include_once '../Acces_BD/Visiteur.php';

isset($_GET['id']);
$id = $_GET['id'];
$visiteur = Rechercher($id);
?>

<center>
    <h1>Modifier les informations du visiteur</h1>
    <form action="../Visiteur.php?action=modifier&id=<? $id ?>" method="POST">
        <input type="hidden" name="id" value="<?= $visiteur['id'] ?>">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="<?= $visiteur['nom'] ?>" required><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" value="<?= $visiteur['Prénom'] ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $visiteur['email'] ?>" required><br><br>

        <button type="submit">Enregistrer</button>
    </form>
</center>
</html>