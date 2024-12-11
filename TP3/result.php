<?php
// Vérifier si tous les paramètres nécessaires sont présents
if (isset($_GET['nb1'], $_GET['op'], $_GET['nb2'])) {
    $nb1 = (float) $_GET['nb1'];
    $nb2 = (float) $_GET['nb2'];
    $op = $_GET['op'];
    $result = null;

    // Déterminer l'opération
    switch ($op) {
        case 'addition':
            $result = $nb1 + $nb2;
            $operation = 'la somme';
            break;
        case 'soustraction':
            $result = $nb1 - $nb2;
            $operation = 'la différence';
            break;
        case 'multiplication':
            $result = $nb1 * $nb2;
            $operation = 'le produit';
            break;
        case 'division':
            if ($nb2 != 0) {
                $result = $nb1 / $nb2;
                $operation = 'le quotient';
            } else {
                $error = "Erreur : Division par zéro !";
            }
            break;
        default:
            $error = "Opérateur invalide.";
    }
} else {
    $error = "Paramètres manquants.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: blueviolet;
            color: azure;
            text-align: center;
            padding: 20px;
        }
        .result-box {
            background-color: #773cbd;
            border-radius: 8px;
            padding: 20px;
            width: 50%;
            margin: 0 auto;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: violet;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: indigo;
        }
    </style>
</head>
<body>
    <div class="result-box">
        <?php if (isset($error)): ?>
            <h1 class="error"><?= $error ?></h1>
        <?php else: ?>
            <h1>Le résultat de <?= $operation ?> de <?= $nb1 ?> et <?= $nb2 ?> est :</h1>
            <h1><?= $result ?></h1>
        <?php endif; ?>
        <a href="index.php">Revenir à la calculatrice</a>
    </div>
</body>
</html>
