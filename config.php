<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ceylon_job_seeker";

// Establish a connection to the database
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection status and handle errors
if (!$conn) {
    die("❌ DB Connection failed: " . mysqli_connect_error());
}
?>