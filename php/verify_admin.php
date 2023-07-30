<?php
session_start();

include("../config/config.php");
include("../php/admin-details.php");

$toastMessage = "";
$toastClass = "";

// Check admin is logged in and a verified admin
if ($_SESSION['isAdmin'] == true && ($current_active_admin['is_verified'] == 1) && ($current_active_admin['master_admin'] == 1)) {
    // Check the ID parameter is provided
    if (isset($_GET['id'])) {
        $admin_id = $_GET['id'];

        // Get the admin details based on the ID
        $get_admin_query = "SELECT * FROM admins WHERE id = '$admin_id'";
        $result = mysqli_query($conn, $get_admin_query);
        $admin = mysqli_fetch_assoc($result);

        // Check the admin = master admin
        if ($current_active_admin['master_admin'] == 1) {
            // Verify the admin
            $update_query = "UPDATE admins SET is_verified = 1 WHERE id = '$admin_id'";
            if (mysqli_query($conn, $update_query)) {
                $toastMessage = "Admin approved successfully.";
                $toastClass = "alert alert-success mb-4";
            } else {
                $toastMessage = "Error approving admin: " . mysqli_error($conn);
                $toastClass = "alert alert-danger mb-4";
            }
        } else {
            $toastMessage = "You are not authorized to approve admins.";
            $toastClass = "alert alert-warning mb-4";
        }
    } else {
        $toastMessage = "Admin ID not provided.";
        $toastClass = "alert alert-danger mb-4";
    }
} else {
    $toastMessage = "You are not authorized to approve admins.";
    $toastClass = "alert alert-warning mb-4";
}

mysqli_close($conn);

$_SESSION['toastMessage'] = $toastMessage;
$_SESSION['toastClass'] = $toastClass;

header("Location: ../admin-dashboard.php");
exit();
?>
