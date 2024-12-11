<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $purchase_date = $_POST['purchase_date'];
    $product_count = $_POST['product_count'];
} else {
    header('Location: accueil.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
            width: 50%;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        input[type="text"] {
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
    <h1>Product Details</h1>
    <form action="affichage.php" method="post">
        <input type="hidden" name="purchase_date" value="<?php echo htmlspecialchars($purchase_date); ?>">
        <input type="hidden" name="product_count" value="<?php echo htmlspecialchars($product_count); ?>">

        <?php for ($i = 1; $i <= $product_count; $i++): ?>
            <div class="form-box">
                <h2>Product <?php echo $i; ?></h2>
                <label for="reference_<?php echo $i; ?>">Reference:</label>
                <input type="text" name="reference_<?php echo $i; ?>" required><br>
                <label for="designation_<?php echo $i; ?>">Designation:</label>
                <input type="text" name="designation_<?php echo $i; ?>" required><br>
                <label for="unit_price_<?php echo $i; ?>">Unit Price:</label>
                <input type="text" name="unit_price_<?php echo $i; ?>" required><br>
                <label for="quantity_<?php echo $i; ?>">Quantity:</label>
                <input type="text" name="quantity_<?php echo $i; ?>" required><br>
            </div>
        <?php endfor; ?>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
