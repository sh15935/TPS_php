<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $purchase_date = $_POST['purchase_date'];
    $product_count = $_POST['product_count'];
    $products = [];

    for ($i = 1; $i <= $product_count; $i++) {
        $products[] = [
            'reference' => $_POST["reference_$i"],
            'designation' => $_POST["designation_$i"],
            'unit_price' => $_POST["unit_price_$i"],
            'quantity' => $_POST["quantity_$i"]
        ];
    }

    // Sort products by quantity (ascending)
    usort($products, function ($a, $b) {
        return $a['quantity'] - $b['quantity'];
    });
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
    <title>Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: blueviolet;
            color: white;
            text-align: center;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
            color: black;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Product Details</h1>
    <p>Date of Purchase: <?php echo htmlspecialchars($purchase_date); ?></p>
    <p>Number of Products: <?php echo htmlspecialchars($product_count); ?></p>

    <table>
        <tr>
            <th>Reference</th>
            <th>Designation</th>
            <th>Unit Price</th>
            <th>Quantity</th>
        </tr>
        <?php
        $total_price = 0;
        $total_quantity = 0;

        foreach ($products as $product):
            $total_price += $product['unit_price'] * $product['quantity'];
            $total_quantity += $product['quantity'];

            // Calculate background color based on quantity
            if ($product['quantity'] <= 2) {
                // Light to dark red for low quantity
                $bg_color = "rgb(252, 204, 204)";
            } elseif ($product['quantity'] >= 10) {
                // Light to dark green for high quantity
                $bg_color = "rgb(146, 242, 148)";
            } else {
                // Light to dark blue for moderate quantity
                $bg_color = "rgb(192, 249, 250)";;
            }            
        ?>
        <tr style="background-color: <?php echo $bg_color; ?>;">
            <td><?php echo htmlspecialchars($product['reference']); ?></td>
            <td><?php echo htmlspecialchars($product['designation']); ?></td>
            <td><?php echo htmlspecialchars($product['unit_price']); ?> DH</td>
            <td><?php echo htmlspecialchars($product['quantity']); ?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="2">Total</td>
            <td><?php echo $total_price; ?> DH</td>
            <td><?php echo $total_quantity; ?></td>
        </tr>
    </table>
</body>
</html>
