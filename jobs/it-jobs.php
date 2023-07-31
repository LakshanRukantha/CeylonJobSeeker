<?php 

include_once '../config/config.php';

$sql = "SELECT * FROM jobs WHERE category_id=1";
$varshow = $conn->query($sql);

session_start();

$isAdmin = isset($_SESSION['isAdmin']) ? $_SESSION['isAdmin'] : "";

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
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/job-pages.css" />
    <title>IT Jobs</title>
  </head>
  <body>
    <div class="main-wrapper">
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
            if($isAdmin) {
              echo("<a href='../php/admin_logout.php' class='btn btn-light'>Logout</a>");
            } else {
              echo("<a href='../admin-register.php'
              ><button class='btn btn-primary' type='button'>
                Register
              </button></a
            >
            <a class='mx-1' href='../admin-login.php'
              ><button class='btn btn-outline-primary' type='button'>
                Login
              </button></a
            >");
            }
            ?>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <div class="container mt-5 mb-5">
        <h2 class="section-title">IT <span>Jobs</span></h2>

      <!-- Description End -->        

      <div class="container">

      <div class="row">
      <?php
        while($row = mysqli_fetch_assoc($varshow)){

      ?>
      <!-- Job Card Start -->
      <div class="col-12 col-lg-4 col-xl-3 col-md-6 card-item">
      
        <div class="main-card-wrapper">
        <div class="card-content-wrapper">
          <div class="top-section">
            <span class="publish-date"><?php echo date("d F, Y", strtotime($row["post_date"])); ?></span>
            <div class="btn-bookmark">
              <i class="fa-solid fa-bookmark"></i>
            </div>
          </div>
          <div class="middle-section">
            <div class="job-details-left">
              <h4 class="company"><?php echo $row["company"]; ?></h4>
              <h3 class="job-title"><?php echo $row["title"]; ?></h3>
            </div>
            <div class="company-image">
              <img
                class="img-fluid"
                src="<?php echo $row["logo"]; ?>"
                alt="Company Image"
              />
            </div>
          </div>
          <div class="bottom-content-wrapper">
            <p class="description">
            <?php echo $row["description"]; ?>
            </p>
            <div class="bottom-content">
              <div class="location-wrapper">
                <i class="fa-solid fa-location-dot"></i>
                <span class="location-text"><?php echo $row["location"]; ?></span>
              </div>
              <span class="job-type"><?php echo $row["type"]; ?></span>
            </div>
          </div>
        </div>
        <div class="job-footer-wrapper">
          <h5 class="salary"><span>$</span><?php echo $row["salary"]; ?><span>/Mo</span></h5>
           <!-- Button trigger modal -->
           <button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $row["id"]; ?>">Details</button>

           <!-- Modal -->
           <div class="modal fade" id="staticBackdrop<?php echo $row["id"]; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-scrollable">
               <div class="modal-content">
                 <div class="modal-header">
                   <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $row["title"]; ?></h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                  <div class="modal-header-cards">
                    <div class="mini-card-wrapper">
                    <i class="fa-solid fa-sack-dollar"></i>
                    <h6>Salary</h6>
                    <span>$<?php echo $row["salary"]; ?></span>
                    </div>
                    <div class="mini-card-wrapper">
                    <i class="fa-solid fa-location-dot"></i>
                    <h6>Location</h6>
                    <span><?php echo $row["location"]; ?></span>
                    </div>
                    <div class="mini-card-wrapper">
                    <i class="fa-solid fa-clock"></i>
                    <h6>Deadline</h6>
                    <span><?php echo date("d F, Y", strtotime($row["deadline"])); ?></span>
                    </div>
                  </div>
                 <div class="modal-body-text-wrapper">
                 <p class="modal-body-text"><span>Company:</span> <?php echo($row['company']); ?></p>
                 <p class="modal-body-text"><span>Job Type:</span> <?php echo($row['type']); ?></p>
                 <p class="modal-body-text"><span>Description:</span> <?php echo($row['description']); ?></p>
                 </div>
                 <div class="modal-body-bottom-wrapper">
                  <p>Published On <span><?php echo date("d F, Y h:i A", strtotime($row["post_date"])); ?></span></p>
                 </div>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Apply</button>
                 </div>
               </div>
             </div>
           </div>   
          <!-- Modal End -->
        </div>
      </div>
    </div>
      <!-- Job Card End -->
      <?php
      }
     ?>
     </div>
     </div>


     </div>


      
      <!-- Footer Start -->
      <footer class="w-100">
        <div class="footer">
          <div class="footer-section flex-grow-1 mb-3">
            <a class="brand-text" href="index.html"
              ><img
                class="img-logo"
                src="../assets/images/logo-light.svg"
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