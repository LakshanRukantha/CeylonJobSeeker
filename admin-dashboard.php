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
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="stylesheet" href="./styles/admin-dashboard.css" />
    <title>Dashboard</title>
  </head>
  <body>
    <div class="main-wrapper">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top w-full bg-body-tertiary">
        <div class="container-fluid px-lg-4">
          <a class="navbar-brand" href="index.html"
            ><img
              class="img-logo"
              src="./assets/images/logo.svg"
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
                  href="./index.html"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categories.html">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="faq.html">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
            </ul>
            <button class="btn btn-light" type="button">Logout</button>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
      <!-- Section: New Job Start -->
      <div class="container section-wrapper">

      <?php
// Include the database configuration file
include("./config/config.php");

// Define variables to hold the toast message and its class (success or error)
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

        // Validate and sanitize the data (you can add more validation here)
        $companyName = trim($companyName);
        $jobTitle = trim($jobTitle);
        $jobDescription = trim($jobDescription);
        $jobLocation = trim($jobLocation);
        $jobSalary = (float) $jobSalary;
        $jobDeadline = date("Y-m-d", strtotime($jobDeadline)); // Convert date to MySQL format (YYYY-MM-DD)

        // Insert the data into the database
        $sql = "INSERT INTO jobs (company, title, description, category_id, location, salary, type, deadline, post_date) 
                VALUES ('$companyName', '$jobTitle', '$jobDescription', '$jobCategory', '$jobLocation', $jobSalary, '$jobType', '$jobDeadline', NOW())";

        if ($conn->query($sql) === TRUE) {
            // Display the success message in the toast
            $toastMessage = "Data inserted successfully!";
            $toastClass = "alert alert-success";
        } else {
            // Display the error message in the toast
            $toastMessage = "Error: " . $sql . "<br>" . $conn->error;
            $toastClass = "alert alert-danger";
        }
    }
}
?>

        <h2 class="section-title">Post A New Job</h2>
        <form class="form" id="jobPostForm" method="post" action="">
          <div class="mb-3">
            <label for="jobTitle" class="form-label">Company Name</label>
            <input
              type="text"
              class="form-control"
              id="companyName"
              name="companyName"
              placeholder="Enter Company Name..."
            />
          </div>
          <div class="mb-3">
            <label for="jobTitle" class="form-label">Job Title</label>
            <input
              type="text"
              class="form-control"
              id="jobTitle"
              name="jobTitle"
              placeholder="Enter Job Title"
            />
          </div>
          <div class="mb-3">
            <label for="jobDescription" class="form-label"
              >Job Description</label
            >
            <textarea
              class="form-control"
              id="jobDescription"
              name="jobDescription"
              rows="3"
              placeholder="Enter Job Description"
            ></textarea>
          </div>
          <div class="mb-3">
            <label for="jobCategory" class="form-label">Job Category</label>
            <select class="form-select" id="jobCategory" name="jobCategory">
              <option selected>Select Job Category</option>
              <option value="1">IT</option>
              <option value="2">Accounting</option>
              <option value="3">Marketing</option>
              <option value="4">Engineering</option>
              <option value="5">Teaching</option>
              <option value="6">Medical</option>
              <option value="7">Other</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jobLocation" class="form-label">Job Location</label>
            <input
              type="text"
              class="form-control"
              id="jobLocation"
              name="jobLocation"
              placeholder="Enter Job Location"
            />
          </div>
          <div class="mb-3">
            <label for="jobSalary" class="form-label">Job Salary</label>
            <input
              type="number"
              class="form-control"
              id="jobSalary"
              name="jobSalary"
              placeholder="Enter Job Salary"
            />
          </div>
          <div class="mb-3">
            <label for="jobType" class="form-label">Job Type</label>
            <select class="form-select" id="jobType" name="jobType">
              <option selected>Select Job Type</option>
              <option value="full_time">Full Time</option>
              <option value="part_time">Part Time</option>
              <option value="contract">Contract</option>
              <option value="internship">Internship</option>
              <option value="temporary">Temporary</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jobDeadline" class="form-label">Job Deadline</label>
            <input
              type="date"
              class="form-control"
              id="jobDeadline"
              name="jobDeadline"
              placeholder="Enter Job Deadline"
            />
          </div>
          <button type="submit" class="btn-primary w-100">Submit</button>
          <?php  echo("<div id='alertMessageArea' class='$toastClass mt-4' role='alert'>
  $toastMessage
</div>") ?>
        </form>
        <!-- Publish To Database -->

        <!-- Publish To Database End -->

      </div>
      <!-- Section: New Job End -->
      <!-- Footer Start -->
      <footer class="w-100">
        <div class="footer">
          <div class="footer-section flex-grow-1 mb-3">
            <a class="brand-text" href="index.html"
              ><img
                class="img-logo"
                src="./assets/images/logo-light.svg"
                alt="CJS Logo"
              />CeylonJobSeeker</a
            >
            <div class="site-info">
              <span
                >Designed and developed by Software Engineering
                Undergraduates</span
              >
              <span
                ><a rel="noopener" href="https://nsbm.ac.lk" target="_blank"
                  >NSBM Green University</a
                ></span
              >
            </div>
          </div>

          <div class="footer-section flex-grow-1">
            <h6>Quick Links</h6>
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Categories</a>
              </li>
              <li>
                <a href="#">FAQ</a>
              </li>
              <li>
                <a href="#">Contact Us</a>
              </li>
              <li>
                <a href="#">About Us</a>
              </li>
            </ul>
          </div>
          <div class="footer-section flex-grow-1">
            <h6>Support</h6>
            <ul>
              <li>
                <a href="#">FAQ</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
              <li>
                <a href="#">Customer Support</a>
              </li>
              <li>
                <a href="#">Terms of Service</a>
              </li>
            </ul>
          </div>
          <div class="footer-section flex-grow-1">
            <h6>Social</h6>
            <div class="social-icon-links">
              <a href="#" title="LinkedIn">
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
              <a href="#" title="Facebook">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="#" title="GitHub">
                <i class="fa-brands fa-github"></i>
              </a>
              <a href="#" title="Twitter">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </div>
          </div>
        </div>
        <hr class="w-100 divider" height="2" />
        <div class="footer-end">
          <span>Copyright &copy; 2023 | All rights reserved.</span>

          <span>Cookies</span>
        </div>
      </footer>
      <!-- Footer End -->
    </div>
    <!-- Custom JS -->
    <script src="./js/admin-dashboard.js"></script>
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
