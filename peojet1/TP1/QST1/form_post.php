<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form with POST</title>
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
            display: inline-block;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: violet;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Form with POST</h1>
    <form action="post_handler.php" method="post">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required>
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
