<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RoamReady - Explore India</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./pics/short-icon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <div class="logo-title-container">
      <a href="#" class="logo">
        <img src="./pics/rr_logo-removebg-preview.png" alt="RoamReady logo">
      </a>
      <h1 class="header-title">RoamReady</h1>
    </div>
      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li>
              <a href="#about" class="navbar-link" data-nav-link>About Us</a>
            </li>

            <li>
              <a href="#destination" class="navbar-link" data-nav-link>Destinations</a>
            </li>

            <li>
              <a href="#packages" class="navbar-link" data-nav-link>Packages</a>
            </li>

            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>Gallery</a>
            </li>

            <li>
              <a href="#contact" class="navbar-link" data-nav-link>Contact Us</a>
            </li>

            <li>
              <a href="login.php" class="navbar-link" data-nav-link>Login</a>
              <form action="login.php" method="post">

            </li>

            <li>
              <a href="signup.php" class="navbar-link" data-nav-link>Sign Up</a>
            </li>

          </ul>

        </nav>

        

      </div>
    </div>

  </header>

  <main>
    <article>
      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Discover the Colors of India</h2>

          <div class="btn-group">
          <a href="cities.php"><button type="button" class="btn btn-secondary">Learn More</button></a>

          <a href="cities.php"><button type="button" class="btn btn-secondary">Book Now</button></a>
          </div>

        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about">
        <div class="container">

          <p class="section-subtitle">Explore India with RoamReady</p>

          <h2 class="h2 section-title">About RoamReady</h2>

          <p class="section-text">
            "To travel is to take a journey into yourself." - Danny Kaye
          </p>

          <p class="section-text">
            RoamReady is your guide to unforgettable travel experiences within India. We believe that every destination has a story to tell, and we're here to help you discover them all.
          </p>

        </div>
      </section>

      <!-- 
        - #DESTINATIONS
      -->

      <section class="destination" id="destination">
        <div class="container">

          <p class="section-subtitle">Explore Indian Wonders</p>

          <h2 class="h2 section-title">Popular Destinations</h2>

          <p class="section-text">
            "The gladdest moment in human life is a departure into unknown lands." - Sir Richard Burton
          </p>

          <ul class="destination-list">

            <li>
              <div class="destination-card">

                <figure class="card-img">
                  <img src="./pics/beautiful-taj-mahal-agra-radjasthan-brittak.jpg" alt="Taj Mahal, Agra" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Taj Mahal, Agra</h3>

                  <p class="card-text">
                    "A thing of beauty is a joy forever." - Uttar Pradesh Tourism
                  </p>

                  <a href="cities.php"><button type="button" class="btn btn-secondary">Explore</button></a>

                </div>

              </div>
            </li>

            <li>
              <div class="destination-card">

                <figure class="card-img">
                  <img src="./pics/kerela.jpg" alt="Kerala Backwaters" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Kerala Backwaters</h3>

                  <p class="card-text">
                    "The land of green magic." - Kerala Tourism
                  </p>

                  <a href="cities.php"><button type="button" class="btn btn-secondary">Explore</button></a>

                </div>

              </div>
            </li>

            <li>
              <div class="destination-card">

                <figure class="card-img">
                  <img src="./pics/jaipur.jpg" alt="Jaipur, Rajasthan" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Jaipur, Rajasthan</h3>

                  <p class="card-text">
                    "The Pink City of India." - Rajasthan Tourism
                  </p>

                  <a href="cities.php"><button type="button"class="btn btn-secondary">Explore</button></a>

                </div>

              </div>
            </li>

          </ul>

          <a href="cities.php"><button type="button" class="btn btn-primary">View All Destinations</button></a>

        </div>
      </section>

      <!-- 
        - #PACKAGES
      -->

      <section class="packages" id="packages">
        <div class="container">

          <p class="section-subtitle">Discover India with Our Packages</p>

          <h2 class="h2 section-title">Featured Packages</h2>

          <p class="section-text">
            "Travel makes one modest. You see what a tiny place you occupy in the world." - Gustave Flaubert
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./pics/golden-triangle.webp" alt="Golden Triangle Tour" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Golden Triangle Tour</h3>

                  <p class="card-text">
                    Experience the essence of India's rich heritage.
                  </p>

                  <a href="cities.php"><button type="button" class="btn btn-secondary">View Details</button></a>

                </div>

                <div class="card-price">
                  <p class="price">$999 <span>per person</span></p>
                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./pics/goa.jpg" alt="Goa Beach Retreat" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Goa Beach Retreat</h3>

                  <p class="card-text">
                    Relax and rejuvenate amidst the serene beaches of Goa.
                  </p>

                  <a href="cities.php"><button type="button" class="btn btn-secondary">View Details</button></a>

                </div>

                <div class="card-price">
                  <p class="price">$799 <span>per person</span></p>
                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./pics/kashmir.jpeg" alt="Kashmir Valley Expedition" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Kashmir Valley Expedition</h3>

                  <p class="card-text">
                    Discover the paradise on earth - Kashmir.
                  </p>

                  <a href="cities.php"><button type="button" class="btn btn-secondary">View Details</button></a>

                </div>

                <div class="card-price">
                  <p class="price">$1299 <span>per person</span></p>
                </div>

              </div>
            </li>

          </ul>

          <a href="cities.php"><button type="button" class="btn btn-primary">View All Packages</button></a>

        </div>
      </section>

      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">India Through Our Lens</p>

          <h2 class="h2 section-title">Photo Gallery</h2>

          <p class="section-text">
            "A picture is worth a thousand words."
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./pics/mountain.jpeg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./pics/temple.jpeg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./pics/bridge.jpeg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./pics/waterfall.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./pics/mumbai.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - #CONTACT
      -->

      <section class="contact" id="contact">
        <div class="container">

          <p class="section-subtitle">Get In Touch</p>

          <h2 class="h2 section-title">Contact Us</h2>

          <div class="contact-form">

            <form action="contactus_form.php" class="form-wrapper">
              <input type="text" name="name" class="input-field" placeholder="Your Name" required>

              <input type="email" name="email" class="input-field" placeholder="Your Email" required>

              <textarea name="message" class="input-field" placeholder="Your Message" required></textarea>

              <button type="submit" class="btn btn-secondary">Send Message</button>
            </form>

          </div>

        </div>
      </section>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./pics/rr_logo-removebg-preview.png" alt="RoamReady logo">
          </a>

          <p class="footer-text">
            "Not all those who wander are lost." - J.R.R. Tolkien
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            "We are here to assist you on your journey."
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a class="contact-link">+01 (123) 4567 89</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a class="contact-link">info@roamready.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>New Delhi, India</address>
            </li>

          </ul>

        </div>

        <div class="footer-social">

          <h4 class="social-title">Follow Us</h4>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a>RoamReady</a>. All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a class="footer-bottom-link">Terms of Service</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>

  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="./actions.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
