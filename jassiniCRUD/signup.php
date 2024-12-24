<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Përgjithësisht stili i faqes */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Stili për container-in e formularit */
        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Stili për inputet e formularit */
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        /* Stili për butonin e dërgimit */
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Stili për titullin */
        h2 {
            text-align: center;
            color: #333;
        }

        /* Stili për placeholder-in */
        ::placeholder {
            color: #888;
        }

    </style>
</head>
<body>
    <form action="signup.php" method="post">
        <input type="text" name="username" placeholder="USERNAME" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="password" placeholder="Password" required>
        <input type="submit" value="Sign Up" name="signup" required>
</form>
    
</body>
</html>