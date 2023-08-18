<?php
// DB Connection
include("../config/config.php");
include("../php/random_string.php");

$toastMessage = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["companyName"]) &&
        isset($_POST["companyEmail"]) &&
        isset($_FILES["companyLogo"]) &&
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
        $companyEmail = $_POST["companyEmail"];
        $jobTitle = $_POST["jobTitle"];
        $jobDescription = $_POST["jobDescription"];
        $jobCategory = $_POST["jobCategory"];
        $jobLocation = $_POST["jobLocation"];
        $jobSalary = $_POST["jobSalary"];
        $jobType = $_POST["jobType"];
        $jobDeadline = $_POST["jobDeadline"];

        // Validate and sanitize the data
        $companyName = trim($companyName);
        $companyEmail = trim($companyEmail);
        $jobTitle = trim($jobTitle);
        $jobDescription = trim($jobDescription);
        $jobLocation = trim($jobLocation);
        $jobSalary = (float) $jobSalary;
        $jobDeadline = date("Y-m-d", strtotime($jobDeadline));

        // Handle the company logo file upload
        $targetDir = "../assets/images/uploads"; // Specify the directory where the images will be stored
        $randomString = generateRandomString(10); // Generate random string for filename
        $targetFile = $targetDir . "/" . pathinfo($_FILES["companyLogo"]["name"], PATHINFO_FILENAME) . "-" . $randomString . ".png";
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the image file is an actual image or a fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["companyLogo"]["tmp_name"]);
            if ($check === false) {
                $toastMessage = "File is not an image.";
                $toastClass = "alert alert-danger mb-4";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($targetFile)) {
            $toastMessage = "Sorry, the file already exists.";
            $toastClass = "alert alert-danger mb-4";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["companyLogo"]["size"] > 500000) {
            $toastMessage = "Sorry, your file is too large.";
            $toastClass = "alert alert-danger mb-4";
            $uploadOk = 0;
        }

        // Allow only image file formats
        if (
            $imageFileType != "jpg" &&
            $imageFileType != "png" &&
            $imageFileType != "jpeg" &&
            $imageFileType != "gif"
        ) {
            $toastMessage = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $toastClass = "alert alert-danger mb-4";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            $toastMessage = "Sorry, your file was not uploaded.";
            $toastClass = "alert alert-danger mb-4";
        } else {
            // If everything is okay & upload the file
            if (move_uploaded_file($_FILES["companyLogo"]["tmp_name"], $targetFile)) {
                $companyLogo = $targetFile; // Save the file path

                $sql = "INSERT INTO jobs (company, email, logo, title, description, category_id, location, salary, type, deadline, post_date) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

                // Create a prepared statement
                $stmt = $conn->prepare($sql);

                // Bind the parameters with the actual data
                $stmt->bind_param("sssssssdss", $companyName, $companyEmail, $companyLogo, $jobTitle, $jobDescription, $jobCategory, $jobLocation, $jobSalary, $jobType, $jobDeadline);

                // Execute the statement
                if ($stmt->execute()) {
                    $toastMessage = "Data inserted successfully!";
                    $toastClass = "alert alert-success mb-4";
                } else {
                    $toastMessage = "Error: " . $sql . "<br>" . $stmt->error;
                    $toastClass = "alert alert-danger mb-4";
                }

                // Close the statement
                $stmt->close();
            } else {
                $toastMessage = "Sorry, there was an error uploading your file.";
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
