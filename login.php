<?php
// Connect to database (replace placeholders with your credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve username and password from the form
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Securely store passwords using password hashing (e.g., bcrypt)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check for matching credentials in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // Successful login
    session_start();
    $_SESSION['username'] = $username;
    header("Location: home.php"); // Redirect to home page
} else {
    // Incorrect credentials
    echo "Invalid username or password";
}

mysqli_close($conn);
?>
