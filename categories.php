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
    <title>Categories</title>
  </head>
  <body>
    <div class="main-wrapper">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top w-full bg-body-tertiary">
        <div class="container-fluid px-lg-4">
          <a class="navbar-brand" href="index.html">
            <img
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
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categories.php">Categories</a>
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
            <button class="btn-primary" type="submit">Login As Admin</button>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
      <!-- Hero Section Start -->
      
        <!-- cards section start -->
        <div class="row">
          <div class="card col-md-4 col-lg-12"> 
            <div class="icon">
              <img src="assets\images\category\se.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">IT</h5>
              <div class="card-text overflow-y-scroll">
                <p>The Information Technology (IT) job category encompasses a wide range of roles that play a 
                  crucial role in managing, implementing, and supporting technology solutions within organizations. IT 
                  professionals are at the forefront of modern business operations, responsible for designing,
                   developing, and maintaining the hardware, software, and networks that keep businesses running smoothly and securely.
                </p>
              </div>
              <li>Software Engineer</li>
              <li>Web Developer</li>
              <li>Data Scientist</li>
              <li>Mobile App Developer</li>
              <li>Systems Administrator</li>
              <li>Network Engineer</li>
              <li>IT Support Specialist</li>
            </div>
              <a href="#" class="btn btn-primary">Explore jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12"> 
            <div class="icon">
              <img src="assets\images\category\Accounting.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Accounting</h5>
              <div class="card-text overflow-y-scroll">
                <p>The Accounting job category involves professionals who are responsible for 
                  managing financial transactions, records, and reports within an organization. 
                  They play a critical role in ensuring the accuracy and compliance of financial data, providing 
                  valuable insights for decision-making, and supporting the overall financial health of the business.</p>
              </div>
                <li>Accountant</li>
                <li>Financial Analyst</li>
                <li>Bookkeeper</li>
                <li>Tax Specialist</li>
                <li>Auditor</li>
                <li>Financial Advisor</li>
            </div>
              <a href="#" class="btn btn-primary">Explore jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12"> 
            <div class="icon">
              <img src="assets\images\category\Marketing.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Marketing</h5>
              <div class="card-text overflow-y-scroll">
                <p>The Marketing job category encompasses a wide range of roles dedicated to promoting products, services,
                   and brands to target audiences. Marketing professionals play a crucial role in understanding consumer behavior,
                    creating compelling campaigns,
                   and implementing strategies to drive customer engagement, brand awareness, and ultimately, business growth.</p>
              </div>
                <li>Sales Representative</li>
                <li>Marketing Manager</li>
                <li>Digital Marketing Specialist</li>
                <li>Advertising Coordinator</li>
                <li>Brand Manager</li>
                <li>Business Development Associate</li>  
            </div>
              <a href="#" class="btn btn-primary">Explore jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12"> 
            <div class="icon">
              <img src="assets\images\category\Engineering.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Engineering</h5>
              <div class="card-text overflow-y-scroll">
                <p>The Engineering job category comprises a diverse range of roles that involve the application of scientific principles
                  , mathematical concepts, and technological innovations to design, develop, and improve various products, systems, and processes.
                   Engineers play a critical role in shaping the world we live in, contributing to 
                  advancements in industries such as aerospace, civil, mechanical, electrical, and more.</p>
              </div>
                <li>Mechanical Engineer</li>
                <li>Electrical Engineer</li>
                <li>Civil Engineer</li>
                <li>Aerospace Engineer</li>
                <li>Chemical Engineer</li>
                <li>Biomedical Engineer</li> 
            </div>
              <a href="#" class="btn btn-primary">Explore jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12"> 
            <div class="icon">
              <img src="assets\images\category\teaching.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Teaching</h5>
              <div class="card-text overflow-y-scroll">
                <p>The Teaching job category encompasses professionals dedicated to imparting knowledge, skills,
                   and values to students across various educational levels. Teachers play a vital role in shaping
                    the minds and futures of young learners,
                   fostering their intellectual curiosity, critical thinking abilities, and personal development.</p>
              </div>
                <li>Teacher</li>
                <li>Professor</li>
                <li>Tutor</li>
                <li>Education Administrator</li>
                <li>School Counselor</li>
                <li>Librarian</li> 
            </div>
              <a href="#" class="btn btn-primary">Explore jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12"> 
            <div class="icon">
              <img src="assets\images\category\medical.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Medical</h5>
              <div class="card-text overflow-y-scroll">
                <p>The Medical job category covers a wide range of roles dedicated to providing healthcare services,
                   diagnosing medical conditions, and promoting well-being.
                   Professionals in this category play a vital role in caring for patients, improving health outcomes,
                    and advancing medical research.</p>
              </div>
                <li>Registered Nurse</li>
                <li>Physician</li>
                <li>Medical Assistant</li>
                <li>Pharmacist</li>
                <li>Physical Therapist</li>
                <li>Healthcare Administrator</li>
            </div>
              <a href="#" class="btn btn-primary">Explore jobs</a> 
          </div>
          <div class="card col-md-4 col-lg-12"> 
            <div class="icon">
              <img src="assets\images\category\iss.png" alt="Card image cap">
            </div>
            <div class="card-body" >
              <h5 class="card-title">Other</h5>
              <div class="card-text overflow-y-scroll">
                <p>encompasses a diverse range of roles that do not fall into specific industry or professional categories.
                   These roles can vary widely,
                   covering unique and specialized positions across various sectors, organizations, and industries.</p>
              </div>
                <li>Receptionist</li>
                <li>UX/UI Designer</li>
                <li>Video Editor</li>
                <li>Cashier</li>
                <li>Machine Operator</li>
                <li>Lawyer</li>
                <li>Travel Agent</li>
            </div>
              <a href="#" class="btn btn-primary">Explore jobs</a> 
          </div>  
        </div>
        <!-- cards section end -->
        
      <!-- Footer Start -->
      <footer class="w-100">
        <div class="footer">
          <div class="footer-section flex-grow-1 mb-3">
            <img src="./assets/images/logo-light.svg" alt="CeylonJobSeeker Logo" height="40" />
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
