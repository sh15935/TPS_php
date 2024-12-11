<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: blueviolet;
            color: white;
            text-align: center;
        }
        .form-box {
            background-color: #773cbd;
            padding: 20px;
            border-radius: 8px;
            width: 40%;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        input[type="text"], input[type="date"] {
            padding: 10px;
            border-radius: 5px;
            border: none;
            width: 80%;
            margin: 10px 0;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: violet;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Product Management</h1>
    <div class="form-box">
        <form action="form.php" method="post">
            <label for="purchase_date">Purchase Date:</label><br>
            <input type="date" id="purchase_date" name="purchase_date" required><br><br>
            <label for="product_count">Number of Products:</label><br>
            <input type="text" id="product_count" name="product_count" required><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
