<?php

session_start();

include("../config/config.php");
include("./admin-details.php");

$toastMessage = "";
$toastClass = "";


// Check admin is logged in and admin is verified and  admin is master admin
if ($_SESSION['isAdmin'] == true && ($current_active_admin['is_verified'] == 1) && ($current_active_admin['master_admin'] == 1)) {
    // Check if the ID parameter is provided
    if (isset($_GET['id'])) {
        $admin_id = $_GET['id'];

        // Get the admin details based on the ID
        $get_admin_query = "SELECT * FROM admins WHERE id = '$admin_id'";
        $result = mysqli_query($conn, $get_admin_query);
        $admin = mysqli_fetch_assoc($result);

        // Check the admin is a master admin
        if (($admin['master_admin'] == 1)) {
            $toastMessage = "You cannot delete a master admin.";
            $toastClass = "alert alert-danger mb-4";
        } else {
            // Delete admin
            $delete_query = "DELETE FROM admins WHERE id = '$admin_id'";
            if (mysqli_query($conn, $delete_query)) {
                $toastMessage = "Admin deleted successfully.";
                $toastClass = "alert alert-success mb-4";
            } else {
                $toastMessage = "Error deleting admin: " . mysqli_error($conn);
                $toastClass = "alert alert-danger mb-4";
            }
        }
    } else {
        $toastMessage = "Admin ID not provided.";
        $toastClass = "alert alert-danger mb-4";
    }
} else {
    $toastMessage = "You are not authorized to perform this action.";
    $toastClass = "alert alert-danger mb-4";
}

mysqli_close($conn);

$_SESSION['toastMessage'] = $toastMessage;
$_SESSION['toastClass'] = $toastClass;

header("Location: ../admin-dashboard.php");
exit;
?>
