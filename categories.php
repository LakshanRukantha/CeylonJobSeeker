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
    <link rel="stylesheet" href="./styles/category.css"/>
    <title>Job Categories</title>
  </head>
  <body>
    <div class="main-wrapper">
      <?php include_once "./components/navbar.php"; ?>
      <!-- Hero Section Start -->
      <div class="container mt-5">
        <h2 class="section-title">Job <span>Categories</span></h2>
      </div>
      
        <!-- cards section start -->
        <div class="row">
          <div class="card col-md-4 col-lg-12 border"> 
            <div class="icon">
              <img src="assets\images\category\se.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">IT</h5>
              <div class="card-text">
                <p>IT professionals manage technology solutions, systems, and networks to support business operations and ensure cybersecurity.
                </p>
              </div>
                <li>Software Engineer</li>
                <li>Web Developer</li>
                <li>Data Scientist</li>
                <li>Network Engineer</li>
            </div>
              <a href="jobs/it-jobs.php" class="btn btn-primary">Explore Jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12 border"> 
            <div class="icon">
              <img src="assets\images\category\Accounting.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Accounting</h5>
              <div class="card-text">
                <p>Accountants maintain financial records, prepare reports, and ensure tax compliance to support business financial health.</p>
              </div>
                <li>Accountant</li>
                <li>Financial Analyst</li>
                <li>Bookkeeper</li>
                <li>Auditor</li>
            </div>
              <a href="jobs/accounting-jobs.php" class="btn btn-primary">Explore Jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12 border"> 
            <div class="icon">
              <img src="assets\images\category\Marketing.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Marketing</h5>
              <div class="card-text">
                <p>Marketers create campaigns, analyze data, and manage brands to drive customer engagement and business growth.</p>
              </div>
                <li>Marketing Manager</li>
                <li>Digital Marketing Specialist</li>
                <li>Advertising Coordinator</li>
                <li>Brand Manager</li>
            </div>
              <a href="jobs/marketing-jobs.php" class="btn btn-primary">Explore Jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12 border"> 
            <div class="icon">
              <img src="assets\images\category\Engineering.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Engineering</h5>
              <div class="card-text">
                <p>Engineers design, develop, and improve products, systems, and structures using scientific principles and technology.</p>
              </div>
                <li>Mechanical Engineer</li>
                <li>Electrical Engineer</li>
                <li>Civil Engineer</li>
                <li>Chemical Engineer</li> 
            </div>
              <a href="jobs/engineering-jobs.php" class="btn btn-primary">Explore Jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12 border"> 
            <div class="icon">
              <img src="assets\images\category\teaching.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Teaching</h5>
              <div class="card-text">
                <p>Teachers educate and support students, develop curriculum, and foster a positive learning environment.</p>
              </div>
                <li>Teacher</li>
                <li>Professor</li>
                <li>Tutor</li>
                <li>Education Administrator</li>
            </div>
              <a href="jobs/teaching-jobs.php" class="btn btn-primary">Explore Jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12 border"> 
            <div class="icon">
              <img src="assets\images\category\medical.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Medical</h5>
              <div class="card-text">
                <p>Medical professionals provide healthcare, diagnose conditions, and conduct research to improve patient well-being.</p>
              </div>
                <li>Nurse</li>
                <li>Physician</li>
                <li>Medical Assistant</li>
                <li>Pharmacist</li>
            </div>
              <a href="jobs/medical-jobs.php" class="btn btn-primary">Explore Jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12 border"> 
            <div class="icon">
              <img src="assets\images\category\iss.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Other</h5>
              <div class="card-text">
                <p>Various roles with specialized tasks, support functions, and creative responsibilities in diverse industries.</p>
              </div>
                <li>Receptionist</li>
                <li>UX/UI Designer</li>
                <li>Lawyer</li>
                <li>Travel Agent</li>
            </div>
              <a href="jobs/other-jobs.php" class="btn btn-primary">Explore Jobs</a> 
          </div>  
        </div>
        <!-- cards section end -->
        
       <!-- Footer Start -->
       <?php include_once('./components/footer.php'); ?>
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
