<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #4a148c; /* Background color */
            color: #ffffff; /* White text */
            text-align: center;
            padding: 20px;
        }
        .result-box {
            background: #6a1b9a; /* Slightly lighter purple box */
            padding: 20px;
            border-radius: 8px;
            display: inline-block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
        }
        p {
            font-size: 18px;
            line-height: 1.5;
        }
        .error {
            color: #ff5722; /* Error message color */
        }
    </style>
</head>
<body>
    <h1>GET Form Results</h1>
    <div class="result-box">
        <?php
        if (isset($_GET['fname']) && isset($_GET['lname']) && isset($_GET['age'])) {
            $fname = htmlspecialchars($_GET['fname']);
            $lname = htmlspecialchars($_GET['lname']);
            $age = htmlspecialchars($_GET['age']);
            echo "<p>Hello, <strong>$fname $lname</strong>.</p>";
            echo "<p>You are <strong>$age years old</strong>.</p>";
        } else {
            echo "<p class='error'>Sorry, no data received.</p>";
        }
        ?>
    </div>
</body>
</html>
