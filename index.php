<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- SEO -->
    <meta name="description" content="CeylonJobSeeker is your premier job portal for Sri Lanka and worldwide opportunities. Explore a diverse range of job listings and embark on your career journey with us. Our commitment is to deliver the ultimate user experience for job seekers." />
    <meta name="keywords" content="CeylonJobSeeker, Ceylon, Job, Seeker, Sri Lanka, Job Portal, Job Seeker, Job Seeker Sri Lanka, Job Portal Sri Lanka, Global Jobs" />
    <meta name="robots" content="index, follow" />
    <!-- Open Graph Info -->
    <meta property="og:title" content="CeylonJobSeeker" />
    <meta property="og:description" content="CeylonJobSeeker is your premier job portal for Sri Lanka and worldwide opportunities. Explore a diverse range of job listings and embark on your career journey with us. Our commitment is to deliver the ultimate user experience for job seekers." />
    <meta property="og:image" content="./assets/images/logo.svg" />
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
    <link rel="stylesheet" href="./styles/home.css" />
    <title>CeylonJobSeeker</title>
  </head>
  <body>
    <div class="main-wrapper">
    <?php include_once "./components/navbar.php"; ?>
      <div class="container">
        <!-- Hero Section Start -->
        <div class="row landing-section">
          <div class="col-12 col-lg-6 left-wrapper">
            <h1 class="hero-title">
              Discover Your <span>Career Destination</span>, A Vast Array Of
              <span>Job Opportunities</span>
            </h1>
            <h2 class="hero-subtitle">
              Discover Daily New Jobs from Top Companies, Browse and Build Your
              Future Today! Unleash Your Potential with our Vast Selection of
              Job Listings Across Industries and Experience Levels. Partnered
              with Leading Companies to Bring You the Best Career Opportunities.
            </h2>
            <div class="hero-taglines">
              <h6>
                <i class="fa-solid fa-magnifying-glass"></i>
                Effortless Discovery
              </h6>
              <h6>
                <i class="fa-solid fa-handshake"></i>
                Premier Partners
              </h6>
              <h6>
                <i class="fa-solid fa-earth-asia"></i>
                Global Reach
              </h6>
            </div>
          </div>
          <div class="col-12 col-lg-6 right-wrapper">
            <img
              class="img-fluid"
              src="./assets/images/hero-image.jpg"
              alt="Hero Image"
            />
          </div>
          <a class="scroll-to-bottom" href="#bottom">
            <span class="scroll-text">
              <i class="fa-solid fa-angles-down"></i>
              Scroll To Bottom
              <i class="fa-solid fa-angles-down"></i>
            </span>
          </a>
        </div>
        <!-- Hero Section End -->
        <!-- Partners Section Start -->
        <div class="row">
          <div
            class="col-12 col-md-6 partners-left mb-4 mb-lg-0 bg-body-tertiary p-3 p-lg-2"
          >
            <h2 class="section-title">Our <span>Partners</span></h2>
            <h3 class="partners-text">
              As a trusted platform, we are proud to partner with top companies
              and leading employers to bring you exclusive job listings. Explore
              diverse career options and take the next step towards your dream
              job. Our commitment to quality ensures you find the perfect match.
              Start your journey with us today!
            </h3>
            <a href="./categories.php"
              ><button type="button" class="btn-primary">
                Explore Jobs
              </button></a
            >
          </div>
          <div class="col-12 partners-right col-md-6">
            <div class="row company-images-wrapper">
              <div class="col-6 flex-grow-1 col-sm-4 col-md-6 col-lg-4">
                <img
                  class="img-fluid company-image"
                  src="./assets/images/home/c-google.png"
                  alt="Logo"
                />
              </div>
              <div class="col-6 flex-grow-1 col-sm-4 col-md-6 col-lg-4">
                <img
                  class="img-fluid company-image"
                  src="./assets/images/home/c-microsoft.png"
                  alt="Logo"
                />
              </div>
              <div class="col-6 flex-grow-1 col-sm-4 col-md-6 col-lg-4">
                <img
                  class="img-fluid company-image"
                  src="./assets/images/home/c-isobar.svg"
                  alt="Logo"
                />
              </div>
              <div class="col-6 flex-grow-1 col-sm-4 col-md-6 col-lg-4">
                <img
                  class="img-fluid company-image"
                  src="./assets/images/home/c-verlag-der-ideen.svg"
                  alt="Logo"
                />
              </div>
              <div class="col-6 flex-grow-1 col-sm-4 col-md-6 col-lg-4">
                <img
                  class="img-fluid company-image"
                  src="./assets/images/home/c-ignition-by-inductive-automation.svg"
                  alt="Logo"
                />
              </div>
              <div class="col-6 flex-grow-1 col-sm-4 col-md-6 col-lg-4">
                <img
                  class="img-fluid company-image"
                  src="./assets/images/home/c-vercel.svg"
                  alt="Logo"
                />
              </div>
            </div>
          </div>
        </div>
        <!-- Parttners Section End -->
        <!-- Reviews Section Start -->
        <div class="reviews-wrapper mt-5">
          <h2 class="section-title">Job Seeker <span>Experiences</span></h2>
          <div class="row reviews-section">
            <div class="card review-card col-12 col-lg-4 col-md-6">
              <div class="card-body">
                <div class="d-flex gap-3">
                  <img
                    class="img-fluid review-person-img"
                    src="./assets/images/home/reviews/person-1.png"
                    alt="Review Image"
                  />
                  <div>
                    <h5 class="card-title">John Smith</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                      Software Engineer
                    </h6>
                  </div>
                </div>
                <p class="card-text review-text">
                  &ldquo; The best job searching platform. As a software
                  engineer, navigating the job market can be overwhelming.
                  Thanks to the comprehensive job listings available here, I was
                  able to confidently pursue and secure my dream job. &rdquo;
                </p>
              </div>
            </div>
            <div class="card review-card col-12 col-lg-4 col-md-6">
              <div class="card-body">
                <div class="d-flex gap-3">
                  <img
                    class="img-fluid review-person-img"
                    src="./assets/images/home/reviews/person-2.png"
                    alt="Review Image"
                  />
                  <div>
                    <h5 class="card-title">Emily Davis</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                      Graphic Designer
                    </h6>
                  </div>
                </div>
                <p class="card-text review-text">
                  &ldquo; As a fresh graduate, finding the right job was crucial
                  for me, especially as a graphic designer. This website
                  provided a wide range of job positions, and I actually found
                  my current role through this platform. Highly recommended!
                  &rdquo;
                </p>
              </div>
            </div>
            <div class="card review-card col-12 col-lg-4 col-md-6">
              <div class="card-body">
                <div class="d-flex gap-3">
                  <img
                    class="img-fluid review-person-img"
                    src="./assets/images/home/reviews/person-3.png"
                    alt="Review Image"
                  />
                  <div>
                    <h5 class="card-title">Michael Johnson</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                      Marketing Manager
                    </h6>
                  </div>
                </div>
                <p class="card-text review-text">
                  &ldquo; My experience with this job searching website has been
                  nothing short of exceptional. As a marketing professional, I'm
                  really impressed with this website's user-friendly interface.
                  It made my job search so much easier and efficient. &rdquo;
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Reviews Section End -->
        <!-- Newsletter Section Start -->
        <div class="newsletter-wrapper mt-5">
          <h2 class="section-title">
            Subscribe To Our <span>Newsletter</span>
          </h2>
          <div class="row mt-4">
            <div class="d-flex col-12 col-md-4">
              <img
                class="img-fluid newsletter-image"
                src="./assets/images/home/newsletter.svg"
                alt="Newsletter Image"
              />
            </div>
            <div class="col-12 col-md-8 mt-3 mt-md-0">
              <p class="newsletter-text">
                Don't miss out on the latest updates, job opportunities, and
                exclusive offers. Subscribe to our newsletter today and let us
                keep you informed and inspired on your journey towards a
                successful career.
              </p>
              <ul class="newsletter-items list-unstyled">
                <li>
                  <i class="fa-solid fa-circle-notch"></i>Get the latest job
                  listings
                </li>
                <li>
                  <i class="fa-solid fa-circle-notch"></i>Receive exclusive
                  offers
                </li>
                <li>
                  <i class="fa-solid fa-circle-notch"></i>Stay up-to-date with
                  our newsletter
                </li>
                <li>
                  <i class="fa-solid fa-circle-notch"></i>Get inspired with our
                  career advice
                </li>
              </ul>
              <form action="" class="input-group mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter email..."
                  aria-label="newsletter-email"
                  aria-describedby="Email"
                />
                <button class="btn btn-primary" type="submit" id="Email">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
        <!-- Newsletter Section End -->
      </div>
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
