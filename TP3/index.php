<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice Simple</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: blueviolet;
            color: azure;
            text-align: center;
            padding: 20px;
        }
        form {
            background: #773cbd;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            margin: 0 auto;
            text-align: left;
        }
        input, select {
            padding: 10px;
            width: calc(100% - 20px);
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: violet;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Calculatrice Simple</h1>
    <form action="result.php" method="get">
        <label for="nb1">Premier nombre :</label>
        <input type="number" id="nb1" name="nb1" placeholder="Entrez un nombre" required>

        <label for="op">Opérateur :</label>
        <select id="op" name="op" required>
            <option value="addition">Addition</option>
            <option value="soustraction">Soustraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>

        <label for="nb2">Deuxième nombre :</label>
        <input type="number" id="nb2" name="nb2" placeholder="Entrez un nombre" required>

        <button type="submit">Calculer</button>
    </form>
</body>
</html>
