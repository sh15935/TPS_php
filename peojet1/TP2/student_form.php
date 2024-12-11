<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
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
            width: 400px;
            margin: 0 auto;
            text-align: left;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], textarea, select {
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .inline-group {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-bottom: 15px;
        }
        .inline-group input[type="radio"], .inline-group input[type="checkbox"] {
            margin: 0;
        }
        button {
            padding: 10px 20px;
            background-color: violet;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: indigo;
        }
    </style>
</head>
<body>
    <h1>Student Information Form</h1>
    <form action="student_result.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label>Gender:</label>
        <div class="inline-group">
            <input type="radio" id="female" name="gender" value="Female" required>
            <label for="female">F</label>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">M</label>
        </div>

        <label>Languages:</label>
        <div class="inline-group">
            <input type="checkbox" id="ar" name="languages[]" value="Arabic">
            <label for="ar">Ar</label>
            <input type="checkbox" id="ang" name="languages[]" value="English">
            <label for="fr">Ang</label>
            <input type="checkbox" id="esp" name="languages[]" value="Spanish">
            <label for="esp">Esp</label>
            <input type="checkbox" id="fr" name="languages[]" value="French">
            <label for="ang">Fr</label>
        </div>

        <label for="specialty">Specialty:</label>
        <select id="specialty" name="specialty" required>
            <option value="Cyber Security">Cyber Security</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Big DATA">Big DATA</option>
            <option value="Machine Learning">Machine Learning</option>
        </select>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" placeholder="Enter your address" required></textarea>

        <button type="submit">Submit</button>
        <button type="reset">Cancel</button>
    </form>
</body>
</html>
