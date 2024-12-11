<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6a1b9a;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .info-box {
            background: #4a148c;
            padding: 20px;
            border-radius: 8px;
            display: inline-block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        p {
            font-size: 18px;
            line-height: 1.5;
        }
        .error {
            color: #ff5722;
        }
    </style>
</head>
<body>
    <h1>User Details</h1>
    <div class="info-box">
        <?php
        // Check if the parameters 'name' and 'age' exist in the URL
        if (isset($_GET['name']) && isset($_GET['age'])) {
            $name = htmlspecialchars($_GET['name']);
            $age = htmlspecialchars($_GET['age']);
            echo "<p>Name: <strong>$name</strong></p>";
            echo "<p>Age: <strong>$age</strong> years old</p>";
        } else {
            echo "<p class='error'>Error: Missing information in the URL.</p>";
        }
        ?>
    </div>
</body>
</html>
