<?php
$conn = new mysqli('localhost', 'root', '', 'Gestion_visiteurs');
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM VISITEURS WHERE ID = $id");
$user = $result->fetch_assoc();
?>
<html>
<center>
<h1>Modifier un utilisateur<h1>
<form action="modifier.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $user['ID']; ?>">

    <label>Nom :</label>
    <input type="text" name="nom" value="<?php echo $user['NOM']; ?>" required><br>

    <label>Prénom :</label>
    <input type="text" name="prenom" value="<?php echo $user['PRENOM']; ?>" required><br>

    <label>Email :</label>
    <input type="email" name="email" value="<?php echo $user['EMAIL']; ?>" required><br>

    <button type="submit">Modifier</button>
</form>
</center>
</html>
