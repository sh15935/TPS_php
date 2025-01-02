<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <form action="../Gestion_Actions/Ajouter.php" method="POST">
        <label>Nom :</label>
        <input type="text" name="nom" required><br>

        <label>Prénom :</label>
        <input type="text" name="prenom" required><br>

        <label>Email :</label>
        <input type="email" name="email" required><br>

        <button type="submit">Envoyer</button>
        <button type="reset">Annuler</button>
    </form>
</body>
</html>