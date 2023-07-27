<?php
// DB Connection
include("../config/config.php");

$toastMessage = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["adminName"]) && isset($_POST["username"]) && isset($_POST["password"])) {
        $adminName = $_POST["adminName"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate and sanitize the data (you may add more validation as needed)
        $adminName = trim($adminName);
        $username = trim($username);
        $password = trim($password);

        // Check if the username already exists in the database
        $checkUsernameSql = "SELECT * FROM admins WHERE username = '$username'";
        $result = $conn->query($checkUsernameSql);

        if ($result->num_rows > 0) {
            $toastMessage = "Username already exists. Please try logging in.";
            $toastClass = "alert alert-danger mb-4";
        } else {
            // Insert the data into the database since the username is not taken
            $sql = "INSERT INTO admins (name, username, password) VALUES ('$adminName', '$username', '$password')";
            
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

// Close the database connection
$conn->close();

// Start a session
session_start();

// Set status message and class in session variables
$_SESSION['toastMessage'] = $toastMessage;
$_SESSION['toastClass'] = $toastClass;

header("Location: ../admin-dashboard.php");
exit; // Important: Terminate the current script to ensure the redirect occurs
?>
