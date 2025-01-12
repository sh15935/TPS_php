<?php
require_once "../../Acces_BD/Etudiant.php";
session_start();

$code = $_GET['code'] ;
$etudiant = Afficher($code);
$action = $_GET['action'] ?? '';
?>

<center>
    <h2>Modifier les informations</h2>
    
    <?php if ($action === "Modifier_photo") { ?>
    <form action="../../Gestions_Actions/Etudiant.php?action=Modifier_photo" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Photo actuelle:</td>
                <td>
                    <img src="<?= htmlspecialchars($etudiant['photo']); ?>" alt="" width="100">
                </td>
            </tr>
            <tr>
                <td>Nouvelle photo:</td>
                <td>
                    <input type="text" name="nouvelle_photo" required>
                    <input type="hidden" name="code" value="<?= htmlspecialchars($code); ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Modifier la photo</button>
                </td>
            </tr>
        </table>
    </form>
    <?php } elseif ($action === "Modifier_password") { ?>
    <form action="../../Gestions_Actions/Etudiant.php?action=Modifier_password" method="post">
        <table>
            <tr>
                <td>Nouveau mot de passe:</td>
                <td>
                    <input type="password" name="nouveau_password" required>
                    <input type="hidden" name="code" value="<?= htmlspecialchars($code); ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Modifier le mot de passe</button>
                </td>
            </tr>
        </table>
    </form>
    <?php } else { ?>
        <p>Action inconnue.</p>
    <?php } ?>
</center>
