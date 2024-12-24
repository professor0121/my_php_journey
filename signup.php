<?php
// Database configuration
$servername = "localhost";
$username = "root";  // Default username in XAMPP
$password = "";      // Default password is empty
$dbname = "test_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error messages
$error_message = "";
$success_message = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $input_email = $_POST['email'];

    // Check if username already exists
    $sql_check_user = "SELECT * FROM users WHERE name = '$input_username'";
    $result = $conn->query($sql_check_user);
    
    if ($result->num_rows > 0) {
        // Username already exists
        $error_message = "Username already taken!";
    } else {
        // Insert new user into the database
        $sql_insert_user = "INSERT INTO users (name, email) VALUES ('$input_username', '$input_email')";
        
        if ($conn->query($sql_insert_user) === TRUE) {
            $success_message = "Registration successful! You can now log in.";
        } else {
            $error_message = "Error: " . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h2>Sign Up Form</h2>

    <!-- Show success or error message -->
    <?php
    if ($success_message != "") {
        echo "<p style='color: green;'>$success_message</p>";
    }
    if ($error_message != "") {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

    <!-- Signup Form -->
    <form action="signup.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
