<?php
$host = "your_host_name";
$user = "your_username";
$pass = "your_password";
$db = "your_database_name";

$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection status
if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Connected successfully!";
}
?>
