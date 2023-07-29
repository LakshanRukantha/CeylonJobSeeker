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
    <link rel="stylesheet" href="./styles/about.css" />
    <title>About Us</title>
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
            <a href="./admin-login.html"
              ><button class="btn-primary" type="button">
                Login As Admin
              </button></a
            >
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
      <div class="container mt-5">
        <h2 class="section-title">The Team Behind <span>This Project</span></h2>
        <div class="container developers-section">
          <div class="row">
            <!-- Card 01 Start -->
            <div class="col-12 col-xl-4 col-md-6 card-item">
              <div class="profile-card">
                <div class="image">
                  <img
                    src="./assets/images/about/developers/lakshan-rukantha.png"
                    alt="Lakshan Rukantha"
                    class="profile-img"
                  />
                </div>
                <div class="text-data">
                  <h1 class="bg-code-tag">&lt;/&gt;</h1>
                  <span class="name">Lakshan Rukantha</span>
                  <span class="sub-title"
                    >BSc (Hons) In Software Engineering</span
                  >
                </div>
                <div class="media-buttons">
                  <a
                    href="https://github.com/LakshanRukantha"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-github link"
                    title="GitHub"
                  >
                    <i class="fa-brands fa-github"></i>
                  </a>
                  <a
                    href="https://www.linkedin.com/in/lakshanrukantha/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-linkedin link"
                    title="LinkedIn"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a
                    href="https://facebook.com/LakshanRukantha.LaKi/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-facebook link"
                    title="Facebook"
                  >
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    href="https://www.instagram.com/lakshan_rukantha/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-instagram link"
                    title="Instagram"
                  >
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>
                <div class="skill-badges">
                  <p class="skill-badge">UI/UX Designer</p>
                  <p class="skill-badge">Developer</p>
                </div>
              </div>
            </div>
            <!-- Card 01 End -->
            <!-- Card 02 Start -->
            <div class="col-12 col-xl-4 col-md-6 card-item">
              <div class="profile-card">
                <div class="image">
                  <img
                    src="./assets/images/about/developers/charith-pramodya.jpg"
                    alt="Charith Pramodya"
                    class="profile-img"
                  />
                </div>
                <div class="text-data">
                  <h1 class="bg-code-tag">&lt;/&gt;</h1>
                  <span class="name">Charith Pramodya</span>
                  <span class="sub-title"
                    >BSc (Hons) In Software Engineering</span
                  >
                </div>
                <div class="media-buttons">
                  <a
                    href="https://github.com/Charith-R"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-github link"
                    title="GitHub"
                  >
                    <i class="fa-brands fa-github"></i>
                  </a>
                  <a
                    href="https://www.linkedin.com/in/charithwije"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-linkedin link"
                    title="LinkedIn"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a
                    href="https://www.facebook.com/wijesinghe.cp"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-facebook link"
                    title="Facebook"
                  >
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    href="https://instagram.com/_pramoth__"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-instagram link"
                    title="Instagram"
                  >
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>
                <div class="skill-badges">
                  <p class="skill-badge">Researcher</p>
                  <p class="skill-badge">Developer</p>
                </div>
              </div>
            </div>
            <!-- Card 02 End -->
            <!-- Card 03 Start -->
            <div class="col-12 col-xl-4 col-md-6 card-item">
              <div class="profile-card">
                <div class="image">
                  <img
                    src="./assets/images/about/developers/profile.png"
                    alt=""
                    class="profile-img"
                  />
                </div>
                <div class="text-data">
                  <h1 class="bg-code-tag">&lt;/&gt;</h1>
                  <span class="name">Lakshan Rukantha</span>
                  <span class="sub-title"
                    >BSc (Hons) In Software Engineering</span
                  >
                </div>
                <div class="media-buttons">
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-github link"
                    title="GitHub"
                  >
                    <i class="fa-brands fa-github"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-linkedin link"
                    title="LinkedIn"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-facebook link"
                    title="Facebook"
                  >
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-instagram link"
                    title="Instagram"
                  >
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>

                <div class="skill-badges">
                  <p class="skill-badge">Researcher</p>
                  <p class="skill-badge">Developer</p>
                </div>
              </div>
            </div>
            <!-- Card 03 End -->
            <!-- Card 04 Start -->
            <div class="col-12 col-xl-4 col-md-6 card-item">
              <div class="profile-card">
                <div class="image">
                  <img
                    src="./assets/images/about/developers/sandun-sandeepa.jpg"
                    alt="Sandun Sandeepa"
                    class="profile-img"
                  />
                </div>
                <div class="text-data">
                  <h1 class="bg-code-tag">&lt;/&gt;</h1>
                  <span class="name">Sandun Sandeepa</span>
                  <span class="sub-title"
                    >BSc (Hons) In Software Engineering</span
                  >
                </div>
                <div class="media-buttons">
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-github link"
                    title="GitHub"
                  >
                    <i class="fa-brands fa-github"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-linkedin link"
                    title="LinkedIn"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-facebook link"
                    title="Facebook"
                  >
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-instagram link"
                    title="Instagram"
                  >
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>

                <div class="skill-badges">
                  <p class="skill-badge">Researcher</p>
                  <p class="skill-badge">Developer</p>
                </div>
              </div>
            </div>
            <!-- Card 04 End -->
            <!-- Card 05 Start -->
            <div class="col-12 col-xl-4 col-md-6 card-item">
              <div class="profile-card">
                <div class="image">
                  <img
                    src="./assets/images/about/developers/supuni-madushani.jpg"
                    alt="Supuni Madushani"
                    class="profile-img"
                  />
                </div>
                <div class="text-data">
                  <h1 class="bg-code-tag">&lt;/&gt;</h1>
                  <span class="name">Supuni Madushani</span>
                  <span class="sub-title"
                    >BSc (Hons) In Software Engineering</span
                  >
                </div>
                <div class="media-buttons">
                  <a
                    href="https://github.com/dannangoda"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-github link"
                    title="GitHub"
                  >
                    <i class="fa-brands fa-github"></i>
                  </a>
                  <a
                    href="https://www.linkedin.com/in/supuni-madushani-531aa1254"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-linkedin link"
                    title="LinkedIn"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a
                    href="https://www.facebook.com/profile.php?id=100069099803412"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-facebook link"
                    title="Facebook"
                  >
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    href="https://instagram.com/_____supuni______"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-instagram link"
                    title="Instagram"
                  >
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>

                <div class="skill-badges">
                  <p class="skill-badge">Researcher</p>
                  <p class="skill-badge">Developer</p>
                </div>
              </div>
            </div>
            <!-- Card 05 End -->
            <!-- Card 06 Start -->
            <div class="col-12 col-xl-4 col-md-6 card-item">
              <div class="profile-card">
                <div class="image">
                  <img
                    src="./assets/images/about/developers/thilakshana-dilshan.jpg"
                    alt="Thilakshana Dilshan"
                    class="profile-img"
                  />
                </div>
                <div class="text-data">
                  <h1 class="bg-code-tag">&lt;/&gt;</h1>
                  <span class="name">Thilakshana Dilshan</span>
                  <span class="sub-title"
                    >BSc (Hons) In Software Engineering</span
                  >
                </div>
                <div class="media-buttons">
                  <a
                    href="https://github.com/thilakshanadilshan"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-github link"
                    title="GitHub"
                  >
                    <i class="fa-brands fa-github"></i>
                  </a>
                  <a
                    href="https://www.linkedin.com/in/thilakshana-dilshan-011a98254"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-linkedin link"
                    title="LinkedIn"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a
                    href="https://facebook.com/profile.php?id=100070157588787"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-facebook link"
                    title="Facebook"
                  >
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    href="https://www.instagram.com/_.di_.l_.sha_.n_/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-instagram link"
                    title="Instagram"
                  >
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>

                <div class="skill-badges">
                  <p class="skill-badge">Researcher</p>
                  <p class="skill-badge">Developer</p>
                </div>
              </div>
            </div>
            <!-- Card 06 End -->
            <!-- Card 07 Start -->
            <div class="col-12 col-xl-4 col-md-6 card-item">
              <div class="profile-card">
                <div class="image">
                  <img
                    src="./assets/images/about/developers/randil-welikala.jpg"
                    alt="Randil Welikala"
                    class="profile-img"
                  />
                </div>
                <div class="text-data">
                  <h1 class="bg-code-tag">&lt;/&gt;</h1>
                  <span class="name">Randil Welikala</span>
                  <span class="sub-title"
                    >BSc (Hons) In Software Engineering</span
                  >
                </div>
                <div class="media-buttons">
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-github link"
                    title="GitHub"
                  >
                    <i class="fa-brands fa-github"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-linkedin link"
                    title="LinkedIn"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-facebook link"
                    title="Facebook"
                  >
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-instagram link"
                    title="Instagram"
                  >
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>

                <div class="skill-badges">
                  <p class="skill-badge">Researcher</p>
                  <p class="skill-badge">Developer</p>
                </div>
              </div>
            </div>
            <!-- Card 07 End -->
            <!-- Card 08 Start -->
            <div class="col-12 col-xl-4 col-md-6 card-item">
              <div class="profile-card">
                <div class="image">
                  <img
                    src="./assets/images/about/developers/janu-ayodhya.png"
                    alt="Janu Ayodhya"
                    class="profile-img"
                  />
                </div>
                <div class="text-data">
                  <h1 class="bg-code-tag">&lt;/&gt;</h1>
                  <span class="name">Janu Ayodhya</span>
                  <span class="sub-title"
                    >BSc in Management Information Systems (Special)</span
                  >
                </div>
                <div class="media-buttons">
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-github link"
                    title="GitHub"
                  >
                    <i class="fa-brands fa-github"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-linkedin link"
                    title="LinkedIn"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-facebook link"
                    title="Facebook"
                  >
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-instagram link"
                    title="Instagram"
                  >
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>

                <div class="skill-badges">
                  <p class="skill-badge">Researcher</p>
                  <p class="skill-badge">Developer</p>
                </div>
              </div>
            </div>
            <!-- Card 08 End -->
            <!-- Card 09 Start -->
            <div class="col-12 col-xl-4 col-md-6 card-item">
              <div class="profile-card">
                <div class="image">
                  <img
                    src="./assets/images/about/developers/profile.png"
                    alt=""
                    class="profile-img"
                  />
                </div>
                <div class="text-data">
                  <h1 class="bg-code-tag">&lt;/&gt;</h1>
                  <span class="name">Lakshan Rukantha</span>
                  <span class="sub-title"
                    >BSc (Hons) In Software Engineering</span
                  >
                </div>
                <div class="media-buttons">
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-github link"
                    title="GitHub"
                  >
                    <i class="fa-brands fa-github"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-linkedin link"
                    title="LinkedIn"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-facebook link"
                    title="Facebook"
                  >
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-instagram link"
                    title="Instagram"
                  >
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>

                <div class="skill-badges">
                  <p class="skill-badge">Researcher</p>
                  <p class="skill-badge">Developer</p>
                </div>
              </div>
            </div>
            <!-- Card 09 End -->
            <!-- Card 10 Start -->
            <div class="col-12 col-xl-4 col-md-6 card-item">
              <div class="profile-card">
                <div class="image">
                  <img
                    src="./assets/images/about/developers/./dinithi-katuwagala.jpg"
                    alt="Dinithi Katuwagala"
                    class="profile-img"
                  />
                </div>
                <div class="text-data">
                  <h1 class="bg-code-tag">&lt;/&gt;</h1>
                  <span class="name">Dinithi Katuwagala</span>
                  <span class="sub-title"
                    >BSc (Hons) In Software Engineering</span
                  >
                </div>
                <div class="media-buttons">
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-github link"
                    title="GitHub"
                  >
                    <i class="fa-brands fa-github"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-linkedin link"
                    title="LinkedIn"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-facebook link"
                    title="Facebook"
                  >
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    href="#"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-instagram link"
                    title="Instagram"
                  >
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>

                <div class="skill-badges">
                  <p class="skill-badge">Researcher</p>
                  <p class="skill-badge">Developer</p>
                </div>
              </div>
            </div>
            <!-- Card 10 End -->
          </div>
        </div>
        <!-- NSBM About Section Start -->
        <h2 class="section-title mt-5">
          We are from <span>NSBM Green University </span>
        </h2>
        <div class="row university-content mt-5 mb-5">
          <div class="description-section col-sm-12 col-lg-12 col-xl-6">
            <p>
              NSBM Green University, the nation’s premier degree-awarding
              institute, is the first of its kind in South Asia. It is a
              government-owned self-financed institute that operates under the
              purview of the Ministry of Education. As a leading educational
              centre in the country, NSBM has evolved into becoming a highly
              responsible higher education institute that offers unique
              opportunities and holistic education on par with international
              standards while promoting sustainable living.
            </p>
            <p>
              NSBM offers a plethora of undergraduate and postgraduate degree
              programmes under five faculties: Business, Computing, Engineering,
              Science and Postgraduate & Professional Advancement. These study
              programmes at NSBM are either its own programmes recognised by the
              University Grants Commission and the Ministry of Higher Education
              or world-class international programmes conducted in affiliation
              with top-ranked foreign universities such as University of
              Plymouth, UK, and Victoria University, Australia.
            </p>
            <p>
              Focused on producing competent professionals and innovative
              entrepreneurs for the increasingly globalising world, NSBM
              nurtures its graduates to become productive citizens of society
              with their specialisation ranging in study fields such as
              Business, Management, Computing, IT, Engineering, Science,
              Psychology, Nursing, Interior design, Quantity Surveying, Law and
              Multimedia.
            </p>
            <p>
              Inspired by the vision of being Sri Lanka’s best-performing
              graduate school and being recognised internationally, NSBM
              currently achieves approximately 3000 new enrollments per year and
              houses above 11,000 students reading over 50 degree programmes
              under 4 faculties. Moreover, over the years, NSBM Green University
              has gifted the nation with 14,000+ graduates and has proved its
              global presence with an alumni network spread all across the
              world.
            </p>
            <p>
              Nestling on a 40-acre land amidst the greenery and serenity in
              Pitipana, Homagama, NSBM Green University, is an ultra-modern
              university complex constructed with state-of-the-art facilities
              and amenities that provides the perfect setting for high-quality
              teaching, learning and research.
            </p>
            <a href="http://nsbm.ac.lk" target="_blank" rel="noopener"
              ><button class="btn-primary" type="button">
                Explore More
              </button></a
            >
          </div>
          <div class="image-section col-sm-12 col-lg-12 col-xl-6 pb-4 pb-xl-0">
            <img
              src="./assets/images/about/nsbm-image.jpg"
              alt="NSBM Green University"
            />
          </div>
        </div>
        <!-- NSBM About Section End -->
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
