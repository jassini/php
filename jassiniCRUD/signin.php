<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Sign In</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Sign In">
    </form>

    <?php

        $host='localhost';
        $username="root";
        $password="";
        $dbname="jassinicrud";
        $table="crud1";

        $conn = new mysql ($servername, $dbUsername, $dbPassword, $dbName);

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize input to prevent SQL injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Query the database to find the user
    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    // Check if user exists
    if ($result->num_rows > 0) {
        // User found, check the password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, log the user in
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            // Redirect to welcome page or dashboard
            header("Location: welcome.php");
            exit();
        } else {
            // Invalid password
            echo "Incorrect password!";
        }
    } else {
        // No user found with that username
        echo "No user found with that username!";
    }
}

// Close the database connection
$conn->close();
?>


    ?>
</body>
</html>