<?php 
include("./config/config.php");
session_start();

$toastMessage = isset($_SESSION['toastMessage']) ? $_SESSION['toastMessage'] : "";
$toastClass = isset($_SESSION['toastClass']) ? $_SESSION['toastClass'] : "";

// Clear the session variables
unset($_SESSION['toastMessage']);
unset($_SESSION['toastClass']);

if(isset($_SESSION['username'])) {
  $_SESSION['toastMessage'] = "You're already signed in!";
  $_SESSION['toastClass'] = "alert alert-info mb-4";
  header("Location: ./admin-dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./assets/images/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./assets/images/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/images/favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="./assets/images/favicons/site.webmanifest" />
    <!-- Bootstrap CSS - CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="stylesheet" href="./styles/admin-panel.css" />
    <title>Sign In</title>
  </head>
  <body>
    <div class="form-wrapper">
      <form class="form login-form"
        id="loginAsAdminForm"
        action="./php/admin_login_handler.php"
        method="post">
      <?php
          echo("<div id='submitStatusArea' class='$toastClass' role='alert'>
          $toastMessage
          </div>");
        ?>
        <h2 class="section-title form-title">Welcome <span>Admin</span></h2>
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
            type="password"
            class="form-control"
            id="password"
            name="password"
            autocomplete="true"
            placeholder="Enter Password..."
          />
          <span class="sub-action-text"
            >Don't have an account?
            <a href="admin-register.php">Sign Up</a></span
          >
        </div>
        <div class="d-flex gap-3">
          <a class="btn btn-outline-secondary w-50" href="index.html">Cancel</a>
          <button class="btn-primary w-50" type="submit">Sign In</button>
        </div>
        <span class="secondary-action-text">- Or -</span>
        <button class="btn btn-secondary w-100 icon-button" type="button">
          <i class="fa-brands fa-google"></i>
          <span>Sign In with Google</span>
        </button>
        <div id="signInAlertMessageArea" class="" role="alert"></div>
      </form>
    </div>
    <!-- Custom JS -->
    <script src="./js/sign-in.js"></script>
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
