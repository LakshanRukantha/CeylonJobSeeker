<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta viewport="width=device-width, initial-scale=1.0" />
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
    <!--                     Bootstrap CSS - CDN               -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />

    <!--                    Link To CSS Style Sheet                         -->

    <link rel="stylesheet" href="./styles/contact.css" />
    <link rel="stylesheet" href="./styles/main.css" />

    <!--                    Font Awesome Icons Link                      -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Contact Section</title>
  </head>
  <body>
    <div class="main-wrapper">
    <?php include_once "./components/navbar.php"; ?>
      <div class="container">
        <main class="row mt-lg-5 mt-md-3">
          <!--           Left Section (Column) Starts          -->

          <section class="col left">
            <div class="gif-container">
              <img
                src="./assets/images/contact/contact.gif"
                alt="Contact GIF"
                class="responsive-gif"
              />
            </div>
            <!--  *******   Social Media Ends   *******  -->
          </section>
          <!--  *******   Left Section (Column) Ends   *******  -->

          <!--  *******   Right Section (Column) Starts   *******  -->

          <section class="col right">
            <!--  *******   Form Starts   *******  -->
            <form class="messageForm border rounded shadow-sm p-3">
            <h2 class="section-title mb-4">Send Us A <span>Message</span></h2>  
            <div class="form-floating mb-3 halfWidth">
                <input
                  type="text"
                  class="form-control"
                  id="floatingInput1"
                  placeholder="name@example.com"
                />
                <label for="floatingInput">Full Name</label>
              </div>

              <div class="form-floating mb-3 halfWidth">
                <input
                  type="email"
                  class="form-control"
                  id="floatingInput2"
                  placeholder="name@example.com"
                />
                <label for="floatingInput">Email</label>
              </div>

              <div class="form-floating mb-3 fullWidth">
                <input
                  type="text"
                  class="form-control"
                  id="floatingInput3"
                  placeholder="name@example.com"
                />
                <label for="floatingInput">Subject</label>
              </div>

              <div class="form-floating fullWidth">
                <textarea
                  class="form-control message-input-area"
                  rows="20"
                  placeholder="Leave a comment here"
                  id="floatingTextarea1"
                ></textarea>
                <label for="floatingTextarea2">Message</label>
              </div>

              <div>
                <br />
                <button type="submit" class="btn-primary d-inline-flex align-items-center gap-2"><i class="fa-regular fa-paper-plane"></i>Send Message</button>
              </div>
            </form>

            <!--  *******   Form Ends   *******  -->
          </section>

          <!--  *******   Right Section (Column) Ends   *******  -->
        </main>
      </div>

      <div class="container">
        <main class="row">
          <!--  *******   Left Section (Column) Starts   *******  -->
          <!--  *******   Title Starts   *******  -->
          <section class="col left">
            <div>
              <h2 class="section-title">Contact Us</h2>
              <p>
                <br />If Connect with us and let's bring your vision to life!
                We're eager to hear your ideas, answer your questions, and work
                together on your next big project. Reach out now and let's make
                amazing things happen. Please contact us at,
              </p>
            </div>
            <!--                     Title Ends                    -->

            <!--                   Contact Info Starts               -->

            <div class="contactInfo">
              <div class="iconGroup">
                <div class="icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div class="details">
                  <span>Phone</span>
                  <span>+94 761234567</span>
                </div>
              </div>

              <div class="iconGroup">
                <div class="icon">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="details">
                  <span>Email</span>
                  <span>support@ceylonjobseeker.com</span>
                </div>
              </div>

              <div class="iconGroup">
                <div class="icon">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="details">
                  <span>Location</span>
                  <span>Pitipana, Homagama, Colombo, Sri Lanka</span>
                </div>
              </div>
            </div>

            <!--                        Contact Info Ends                  -->

            <!--                      Social Media Starts                   -->

            <div class="socialMedia">
              <a href="#" aria-label="Facebook"
                ><i class="fa-brands fa-facebook-f"></i
              ></a>
              <a href="#" aria-label="Twitter"
                ><i class="fa-brands fa-twitter"></i
              ></a>
              <a href="#" aria-label="Instagram"
                ><i class="fa-brands fa-instagram"></i
              ></a>
              <a href="#" aria-label="LinkedIn"
                ><i class="fa-brands fa-linkedin-in"></i
              ></a>
            </div>

            <!--                      Social Media Ends                 -->
          </section>
        </main>
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
