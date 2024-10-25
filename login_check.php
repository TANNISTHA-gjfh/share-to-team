<?php
session_start(); // Start the session

$host = "localhost";
$user = "root";
$password = "";
$db = "internet_project";

// Establish the database connection
$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check the user credentials
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($data, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Set session variables
        $_SESSION['username'] = $row['username'];
        $_SESSION['usertype'] = $row['usertype'];

        // Redirect based on user type
        if ($row['usertype'] == 'admin') {
            header("Location: adminhome.php");
            exit();
        } elseif ($row['usertype'] == 'student') {
            header("Location: studenthome.php");
            exit();
        } 
    } else {
        echo "Invalid username or password";
    }
}
?>
