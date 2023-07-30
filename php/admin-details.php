<?php
    // Get the admin details
    $current_active_admin_username = $_SESSION['username'];
    $get_current_active_admin_query = "SELECT * FROM admins WHERE username = '$current_active_admin_username'";
    $result = mysqli_query($conn, $get_current_active_admin_query);
    $current_active_admin = mysqli_fetch_assoc($result);

?>