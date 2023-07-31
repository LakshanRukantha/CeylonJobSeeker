<?php
include("../config/config.php");

$toastMessage = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["fullName"]) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["confirmPassword"])) {
        $fullName = $_POST["fullName"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        // Validate and sanitize the data
        $fullName = trim($fullName);
        $username = trim($username);
        $password = trim($password);
        $confirmPassword = trim($confirmPassword);

        // Check the username already exists in the database
        $checkUsernameSql = "SELECT * FROM admins WHERE username = '$username'";
        $result = $conn->query($checkUsernameSql);

        if ($result->num_rows > 0) {
            $toastMessage = "Username already exists. Please try logging in.";
            $toastClass = "alert alert-danger mb-4";
        } else {
            // Check passwords match
            if ($password !== $confirmPassword) {
                $toastMessage = "Passwords do not match.";
                $toastClass = "alert alert-danger mb-4";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                // Insert the data into the database
                $sql = "INSERT INTO admins (name, username, password) VALUES ('$fullName', '$username', '$hashedPassword')";
            
                if ($conn->query($sql) === TRUE) {
                    $toastMessage = "Account created successfully!";
                    $toastClass = "alert alert-success mb-4";
                } else {
                    $toastMessage = "Error: " . $sql . "<br>" . $conn->error;
                    $toastClass = "alert alert-danger mb-4";
                }
            }
        }
    }
}

$conn->close();

session_start();

$_SESSION['toastMessage'] = $toastMessage;
$_SESSION['toastClass'] = $toastClass;

header("Location: ../admin-login.php");
exit;
?>
