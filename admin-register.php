<?php 
include("./config/config.php");
session_start();

$toastMessage = isset($_SESSION['toastMessage']) ? $_SESSION['toastMessage'] : "";
$toastClass = isset($_SESSION['toastClass']) ? $_SESSION['toastClass'] : "";

// Clear the session variables
unset($_SESSION['toastMessage']);
unset($_SESSION['toastClass']);

if(isset($_SESSION['username'])) {
  header("Location: ./admin-dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS - CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="stylesheet" href="./styles/admin-panel.css" />
    <title>Admin Login</title>
  </head>
  <body>
    <div class="form-wrapper">
      <form
        class="form register-form"
        id="addNewAdminForm"
        action="./php/register_new_admin.php"
        method="post"
      >
        <?php
          echo("<div id='submitStatusArea' class='$toastClass' role='alert'>
          $toastMessage
          </div>");
        ?>
        <h2 class="section-title form-title">Register As <span>Admin</span></h2>
        <div class="mb-3">
          <label for="fullName" class="form-label">Full Name</label>
          <input
            type="text"
            class="form-control"
            id="fullName"
            name="fullName"
            placeholder="Enter Userame..."
          />
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input
            type="text"
            class="form-control"
            id="username"
            name="username"
            placeholder="Enter Userame..."
          />
        </div>
        <div class="mb-3">
          <label for="adminName" class="form-label">Password</label>
          <input
            type="text"
            class="form-control"
            id="password"
            name="password"
            placeholder="Enter Password..."
          />
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label"
            >Confirm Password</label
          >
          <input
            type="text"
            class="form-control"
            id="confirmPassword"
            name="confirmPassword"
            placeholder="Enter Password Again..."
          />
          <span class="sub-action-text"
            >Already have an account? <a href="admin-login.php">Login</a></span
          >
        </div>
        <button class="btn-primary w-100" type="submit">Register</button>
      </form>
    </div>
    <!-- Popper - CDN -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!-- Fontawesome - CDN -->
    <script
      src="https://kit.fontawesome.com/0a73ff5289.js"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS - CDN -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
      integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
