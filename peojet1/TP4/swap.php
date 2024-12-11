<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP4: Swap Input Fields</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: blueviolet;
            color: azure;
            text-align: center;
            padding: 20px;
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .box {
            background-color: #773cbd;
            border-radius: 8px;
            padding: 20px;
            width: 30%;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        input[type="text"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100px;
            margin: 5px;
            text-align: center;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: violet;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: indigo;
        }
    </style>
</head>
<body>
    <h1>TP4: Swap Input Fields</h1>
    <?php
    // Initialize default values
    $number1 = isset($_POST['number1']) ? $_POST['number1'] : '5';
    $number2 = isset($_POST['number2']) ? $_POST['number2'] : '8';

    // Swapped values
    $swappedNumber1 = $number1;
    $swappedNumber2 = $number2;

    // Swap logic if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $temp = $swappedNumber1;
        $swappedNumber1 = $swappedNumber2;
        $swappedNumber2 = $temp;
    }
    ?>
    <div class="container">
        <!-- Original values -->
        <div class="box">
            <h2>Original Values</h2>
            <form method="post">
                <label for="number1">Number 1:</label>
                <input type="text" id="number1" name="number1" value="<?php echo htmlspecialchars($number1); ?>"><br>
                <label for="number2">Number 2:</label>
                <input type="text" id="number2" name="number2" value="<?php echo htmlspecialchars($number2); ?>"><br><br>
                <button type="submit">Swap</button>
            </form>
        </div>

        <!-- Swapped values -->
        <div class="box">
            <h2>Swapped Values</h2>
            <label>Number 1:</label>
            <input type="text" value="<?php echo htmlspecialchars($swappedNumber1); ?>" ><br>
            <label>Number 2:</label>
            <input type="text" value="<?php echo htmlspecialchars($swappedNumber2); ?>" ><br><br>
            <button onclick="window.location.reload();">Reset</button>
        </div>
    </div>
</body>
</html>
