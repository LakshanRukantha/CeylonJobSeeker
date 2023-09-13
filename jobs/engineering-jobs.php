<?php 

include_once '../config/config.php';

$sql = "SELECT * FROM jobs WHERE category_id=4 ORDER BY post_date DESC";

$varshow = $conn->query($sql);

session_start();

$isAdmin = isset($_SESSION['isAdmin']) ? $_SESSION['isAdmin'] : "";

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
      href="../assets/images/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../assets/images/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="../assets/images/favicons/site.webmanifest" />
    <!-- Bootstrap CSS - CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/job-pages.css" />
    <title>Engineering Jobs</title>
  </head>
  <body>
    <div class="main-wrapper">
      <!-- Navbar  -->
      <?php include_once "../components/jobs-navbar.php"; ?>
      <!-- Navbar End -->
      <div class="container mt-5 mb-5">
        <h2 class="section-title">Engineering <span>Jobs</span></h2>

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
                class="img-fluid rounded-circle"
                src="<?php echo $row["logo"]; ?>"
                alt="Logo"
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
          <h5 class="salary"><span>$</span><?php echo $row["salary"]; ?><span> Per Month</span></h5>
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
                    <span><?php echo date("jS M", strtotime($row["deadline"])); ?></span>
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
                   <a href="mailto:<?php echo($row['email']) ?>" class="btn btn-primary">Apply</a>
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
      <?php include_once "../components/jobs-footer.php"; ?>
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