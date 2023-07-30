<?php
session_start();

include("../config/config.php");

$toastMessage = "";
$toastClass = "";

// Check form submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize the data
    $username = trim($username);
    $password = trim($password);

    // Validate username and password
    $query = "SELECT * FROM admins WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $admin = mysqli_fetch_assoc($result);

        if ($password === $admin["password"]) {
            // Check if the admin is verified
            if ($admin["is_verified"] == 1) {
                // Set session variables for admin validation and username
                $_SESSION["isAdmin"] = true;
                $_SESSION["username"] = $username;

                header("Location: ../admin-dashboard.php");
                exit;
            } else {
                $toastMessage = "Your account is not verified. Please wait for approval.";
                $toastClass = "alert alert-danger mb-4";
            }
        } else {
            $toastMessage = "Invalid password. Please try again.";
            $toastClass = "alert alert-danger mb-4";
        }
    } else {
        $toastMessage = "Invalid username. Please try again.";
        $toastClass = "alert alert-danger mb-4";
    }
}

mysqli_close($conn);

$_SESSION['toastMessage'] = $toastMessage;
$_SESSION['toastClass'] = $toastClass;

header("Location: ../admin-login.php");
exit;
?>
