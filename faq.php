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
    <link rel="stylesheet" href="./styles/faq.css" />
    <title>FAQ</title>
  </head>
  <body>
    <div class="main-wrapper">
    <?php include_once "./components/navbar.php"; ?>
      <div class="container faq-section">
        <div class="faq-section-left">
          <img
            class="faq-image"
            src="./assets/images/faq/faq-art.png"
            alt="FAQ Image"
          />
        </div>
        <div class="faq-section-right">
          <h2>Frequently asked questions</h2>
          <p>Questions you might ask about our Services.</p>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne"
                  aria-expanded="false"
                  aria-controls="flush-collapseOne"
                >
                  How frequently are new job listings added to CeylonJobSeeker?
                </button>
              </h2>
              <div
                id="flush-collapseOne"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  New job listings are added daily as employers post their
                  openings on our platform. We recommend checking regularly or
                  setting up job alerts to stay updated.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo"
                  aria-expanded="false"
                  aria-controls="flush-collapseTwo"
                >
                  How can I find the latest job openings on the website?
                </button>
              </h2>
              <div
                id="flush-collapseTwo"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  You can find the latest job openings by visiting our homepage
                  regularly. The newest job listings will be displayed at the
                  top of the page.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree"
                  aria-expanded="false"
                  aria-controls="flush-collapseThree"
                >
                  Is CeylonJobSeeker accessible on mobile devices?
                </button>
              </h2>
              <div
                id="flush-collapseThree"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  Yes, our website is fully responsive, and you can access it on
                  various devices, including smartphones and tablets.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFour"
                  aria-expanded="false"
                  aria-controls="flush-collapseFour"
                >
                  Are there any fees for using this job search platform?
                </button>
              </h2>
              <div
                id="flush-collapseFour"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  No, our job search platform is completely free for job
                  seekers. There are no hidden fees or charges to access job
                  listings or apply for positions.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFive"
                  aria-expanded="false"
                  aria-controls="flush-collapseFive"
                >
                  Are remote or work-from-home jobs available on this platform?
                </button>
              </h2>
              <div
                id="flush-collapseFive"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  Yes, we have a category specifically for remote and
                  work-from-home jobs. You can filter your search to find
                  opportunities that allow you to work remotely.
                </div>
              </div>
            </div>
          </div>
          <h4 class="mt-4">Still have questions?</h4>
          <p>
            If you have any other questions or need further assistance, please
            don't hesitate to contact our support team at through our contact
            form.
          </p>
          <button class="btn-primary" type="button">Contact Us</button>
        </div>
      </div>
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
