<?php
include_once '../Acces_BD/Visiteur.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $visiteur = Rechercher($id);
    if ($visiteur) {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Visiteur</title>
</head>
<body>
    <h1>Modifier les informations du visiteur</h1>
    <form action="../Gestion_Actions/Modifier.php" method="POST">
        <input type="hidden" name="id" value="<?= $visiteur['id'] ?>">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="<?= $visiteur['nom'] ?>" required><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" value="<?= $visiteur['Prénom'] ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $visiteur['email'] ?>" required><br><br>

        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
