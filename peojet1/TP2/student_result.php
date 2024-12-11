<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: blueviolet;
            color: azure;
            text-align: center;
            padding: 20px;
        }
        .result-box {
            background: #773cbd;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            margin: 0 auto;
            text-align: left;
        }
        p {
            font-size: 18px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <h1>Student Details</h1>
    <div class="result-box">
        <?php
        // Check if form data is set
        if (isset($_POST['name'], $_POST['gender'], $_POST['languages'], $_POST['specialty'], $_POST['address'])) {
            // Sanitize inputs
            $name = htmlspecialchars($_POST['name']);
            $gender = htmlspecialchars($_POST['gender']);
            $languages = $_POST['languages'];
            $specialty = htmlspecialchars($_POST['specialty']);
            $address = htmlspecialchars($_POST['address']);

            // Display the information
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Gender:</strong> $gender</p>";
            echo "<p><strong>Languages:</strong> " . implode(", ", $languages) . "</p>";
            echo "<p><strong>Specialty:</strong> $specialty</p>";
            echo "<p><strong>Address:</strong> $address</p>";
        } else {
            echo "<p>Error: Missing information.</p>";
        }
        ?>
    </div>
</body>
</html>