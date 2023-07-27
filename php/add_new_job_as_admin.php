<?php
// DB Connection
include("../config/config.php");

$toastMessage = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["companyName"]) &&
        isset($_POST["jobTitle"]) &&
        isset($_POST["jobDescription"]) &&
        isset($_POST["jobCategory"]) &&
        isset($_POST["jobLocation"]) &&
        isset($_POST["jobSalary"]) &&
        isset($_POST["jobType"]) &&
        isset($_POST["jobDeadline"])
    ) {
        // Retrieve the form data
        $companyName = $_POST["companyName"];
        $jobTitle = $_POST["jobTitle"];
        $jobDescription = $_POST["jobDescription"];
        $jobCategory = $_POST["jobCategory"];
        $jobLocation = $_POST["jobLocation"];
        $jobSalary = $_POST["jobSalary"];
        $jobType = $_POST["jobType"];
        $jobDeadline = $_POST["jobDeadline"];

        // Validate and sanitize the data
        $companyName = trim($companyName);
        $jobTitle = trim($jobTitle);
        $jobDescription = trim($jobDescription);
        $jobLocation = trim($jobLocation);
        $jobSalary = (float) $jobSalary;
        $jobDeadline = date("Y-m-d", strtotime($jobDeadline));

        // Insert the data into the database
        $sql = "INSERT INTO jobs (company, title, description, category_id, location, salary, type, deadline, post_date) 
                VALUES ('$companyName', '$jobTitle', '$jobDescription', '$jobCategory', '$jobLocation', $jobSalary, '$jobType', '$jobDeadline', NOW())";

        if ($conn->query($sql) === TRUE) {
            $toastMessage = "Data inserted successfully!";
            $toastClass = "alert alert-success mb-4";
        } else {
            $toastMessage = "Error: " . $sql . "<br>" . $conn->error;
            $toastClass = "alert alert-danger mb-4";
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
