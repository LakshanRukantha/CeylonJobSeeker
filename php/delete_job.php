<?php

session_start();

include("../config/config.php");
include("./admin-details.php");

$toastMessage = "";
$toastClass = "";

// Check if the ID parameter is provided in the URL
if (isset($_GET['job_id'])) {
    $job_id = $_GET['job_id'];

    // Get the job details based on the ID
    $get_job_query = "SELECT * FROM jobs WHERE id = '$job_id'";
    $result = mysqli_query($conn, $get_job_query);
    $job = mysqli_fetch_assoc($result);

    // Check if the job exists
    if ($job) {
        // Check if the admin is logged in and verified (assuming isAdmin is a session variable set during login)
        if ($_SESSION['isAdmin'] == true && ($current_active_admin['is_verified'] == 1)) {
            // Perform the deletion query
            $delete_query = "DELETE FROM jobs WHERE id = '$job_id'";
            if (mysqli_query($conn, $delete_query)) {
                $toastMessage = "Job deleted successfully.";
                $toastClass = "alert alert-success mb-4";
            } else {
                $toastMessage = "Error deleting job: " . mysqli_error($conn);
                $toastClass = "alert alert-danger mb-4";
            }
        } else {
            $toastMessage = "You are not authorized to delete jobs.";
            $toastClass = "alert alert-danger mb-4";
        }
    } else {
        $toastMessage = "Job not found.";
        $toastClass = "alert alert-danger mb-4";
    }
} else {
    $toastMessage = "Job ID not provided.";
    $toastClass = "alert alert-danger mb-4";
}

// Close the database connection
mysqli_close($conn);

// Set status message and class in session variables
$_SESSION['toastMessage'] = $toastMessage;
$_SESSION['toastClass'] = $toastClass;

// Redirect to admin-dashboard.php
header("Location: ../admin-dashboard.php");
exit;
?>
