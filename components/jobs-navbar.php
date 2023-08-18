<?php
include("../config/config.php");

$isAdmin = isset($_SESSION['isAdmin']) ? $_SESSION['isAdmin'] : "";

?>
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top w-full bg-body-tertiary">
        <div class="container-fluid px-lg-4">
          <a class="navbar-brand" href="index.html"
            ><img
              class="img-logo"
              src="../assets/images/logo.svg"
              alt="CJS Logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="../index.html"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../categories.php">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../faq.php">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../about.php">About Us</a>
              </li>
            </ul>
            <div>
            <?php
              if ($isAdmin) {
                  echo ("
                      <a href='../admin-dashboard.php'>
                          <button class='btn btn-primary' type='button'>
                              Dashboard
                          </button>
                      </a>
                      <a href='../php/admin_logout.php'>
                          <button class='btn btn-outline-secondary'>Logout</button>
                      </a>
                  ");
              } else {
                  echo ("
                      <a href='../admin-register.php'>
                          <button class='btn btn-primary' type='button'>
                              Register
                          </button>
                      </a>
                      <a class='mx-1' href='../admin-login.php'>
                          <button class='btn btn-outline-primary' type='button'>
                              Login
                          </button>
                      </a>
                  ");
              }
              ?>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->