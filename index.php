 <?php
    // var_dump($_POST);
    require __DIR__ . '/app.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="PHP forma">
    <script src="script.js" defer></script>
    <title>Healthy lifestyle</title>
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" /> -->
    <link rel="stylesheet" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
  </head>
  <body>

   <!-- Section: login form -->
   <nav class=" login-form default-width split">
      <div class="nav-login">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username" require/>
            <input type="password" name="pwd" placeholder="Password" require />
            <button type="submit" name="submit">Login</button>
            <a href="signup.php" class="button">Sign up</a>
        </form>
      </div>
    </nav>

    <!-- Section: page header -->
    <div class="page-header default-width">
      <div class="navigation split">
        <!-- Logo -->
        <div class="logo">
          <a href=""> <img src="assets/logo.png" alt="logo" /> </a>
        </div>

        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <!-- Menu -->
        <div class="menu split">
          <div class="menu-single">
            <a href="#">Home</a>
          </div>
          <div class="menu-single">
            <a href="#">About</a>
          </div>
          <div class="menu-single">
            <a href="#">Blog</a>
          </div>
          <div class="menu-single">
            <a href="#">Contact</a>
          </div>
          <div class="menu-single">
            <button class="button menu-button">Get webify today</button>
          </div>
    
        </div>
      </div>
    </div>

    

    <!-- Section: hero  -->
    <div class="section hero">
      <div class="hero-content split default-width">
        <div class="hero-text">
          <h1>Organic & natural healthy lifestyle</h1>
          <p class="light">
            Performance review synergize productive mindfulness for downselect
            and horsehead offer.
          </p>
          <a href="#" class="button round-button">Discover more</a>
        </div>
        <div class="hero-image">
          <img src="assets/hero.png" alt="" />
        </div>
      </div>
    </div>

    <!-- Section: clients logo -->
    <div class="section clients-logo">
      <div class="clients-logo-img default-width split">
        <a href=""> <img src="assets/client-1.png" alt="tapestry" /> </a>
        <a href=""> <img src="assets/client-2.png" alt="couchbase" /> </a>
        <a href=""> <img src="assets/client-3.png" alt="zalando" /> </a>
        <a href=""> <img src="assets/client-4.png" alt="areem" /> </a>
        <a href=""> <img src="assets/client-5.png" alt="alaska" /> </a>
      </div>
    </div>

    <!-- Section: features -->
    <div class="section features">
      <div class="title title-features">
        <h6>Organic Business Features</h6>
        <h3>Our Unique Features</h3>
      </div>
      <div class="swiper-container feature-box default-width split">
        <div class="swiper-wrapper">
          <input type="radio" name="r" id="r1" checked />
          <input type="radio" name="r" id="r2" />
          <input type="radio" name="r" id="r3" />

          <div class="single-box s1">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>100% Organic</h4>
            <p>1 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>100% Organic</h4>
            <p>2 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>100% Organic</h4>
            <p>3 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>100% Organic</h4>
            <p>4 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>10000% Organic</h4>
            <p>5 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>10000% Organic</h4>
            <p>6 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>10000% Organic</h4>
            <p>7 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>10000% Organic</h4>
            <p>8 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>900% Organic</h4>
            <p>9 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>900% Organic</h4>
            <p>10 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>900% Organic</h4>
            <p>11 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
          <div class="single-box">
            <img src="assets/leaf.png" alt="leaf logo" />
            <h4>900% Organic</h4>
            <p>12 Cobbler's pose, bound angle pose staff pose bow.</p>
            <a href="#" class="learn-more">Learn More</a>
          </div>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
      </div>
      <div class="default-width">
        <div class="slides-navigation">
          <label for="r1" class="bar slide-button"></label>
          <label for="r2" class="bar slide-button"></label>
          <label for="r3" class="bar slide-button"></label>
        </div>
      </div>
    </div>

    <!-- Section: Hero 2 -->
    <div class="section hero2">
      <div class="default-width split">
        <div class="hero2-text">
          <div class="title-hero2">
            <h6>
              Set up your website in minutes and bring your brand to life.
            </h6>
            <h3>
              Organic. Fresh. Natural. <br />
              Everything you ever need.
            </h3>
          </div>
          <div class="hero2-container split">
            <div class="single-leaf-box">
              <img src="assets/leaf-white.png" alt="leaf logo" />
              <h4>100% Organic</h4>
              <p>Cobbler's pose, bound angle pose staff pose bow.</p>
            </div>
            <div class="single-leaf-box">
              <img src="assets/leaf-white.png" alt="leaf logo" />
              <h4>100% Organic</h4>
              <p>Cobbler's pose, bound angle pose staff pose bow.</p>
            </div>
            <div class="single-leaf-box">
              <img src="assets/leaf-white.png" alt="leaf logo" />
              <h4>100% Organic</h4>
              <p>Cobbler's pose, bound angle pose staff pose bow.</p>
            </div>
          </div>
        </div>
        <div class="hero2-img"><img src="assets/hero-2.png" alt="" /></div>
      </div>
    </div>

    <!-- Section: form -->
    <div class="form default-width">
      <div><h3>Our Handpicked Products</h3></div>
      <div class="form-box">
        <form id="contact" action="index.php" method="post">
          <div class="single-field">
            <label for="name">Your name</label>
            <input
              type="text"
              name="vardas"
              placeholder="Your name"
              required
              
            />
          </div>
          <div class="single-field">
            <label for="email">Your email</label>
            <input
              type="email"
              name="email"
              placeholder="Your email"
              required
            />
          </div>
          <div class="single-field">
            <label for="message">Message</label>
            <textarea
              placeholder="Your message..."
              name="message"
              required
              cols="30"
              rows="10"
            ></textarea>
          </div>
          <div class="form-single">
            <button
              class="button round-button form-button"
              name="submit"
              type="submit"
              id="contact-submit"
            >
              Send
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Section Hero3 -->
    <div class="section hero3">
      <div class="hero3-title default-width">
        <h6>
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
          nonumy eirmod tempor
        </h6>
        <h3>
          The convenient & affordable <br />
          Organic solution.
        </h3>
        <a href="#" class="button round-button">Get Organic</a>
      </div>
    </div>

    <!-- Section blog -->
    <div class="section blog">
      <div class="title title-blog">
        <h6>Daily Blog journal</h6>
        <h3>Organic Food Blog</h3>
      </div>
      <div class="blog-post default-width split">
        <div class="single-post">
          <img src="assets/feature-1.png" alt="food picture" />
          <h4>
            <a href="">8 Easy Pieces I’ve Worn Over & Over to Have it All</a>
          </h4>
          <h6 class="blog-author">David Beck &#9679; April 13, 2019</h6>
        </div>
        <div class="single-post">
          <img src="assets/feature-2.png" alt="food picture" />
          <h4>
            <a href="">8 Easy Pieces I’ve Worn Over & Over to Have it All</a>
        </h4>
          <h6 class="blog-author">David Beck &#9679; April 13, 2019</h6>
        </div>
        <div class="single-post">
          <img src="assets/feature-3.png" alt="food picture" />
          <h4>
            <a href="">8 Easy Pieces I’ve Worn Over & Over to Have it All </a>
          </h4>
          <h6 class="blog-author">David Beck &#9679; April 13, 2019</h6>
        </div>
        <div class="single-post no-padding">
          <img src="assets/feature-4.png" alt="food picture" />
          <h4>
          <a href="">8 Easy Pieces I’ve Worn Over & Over to Have it All</a>
          </h4>
          <h6 class="blog-author">David Beck &#9679; April 13, 2019</h6>
        </div>
      </div>
    </div>

    <!-- Section Info-->
    <div class="section info">
      <div class="info-container default-width split">
        <div class="single-element resources">
          <h6>Resources</h6>

          <a href="#">About Us</a>
          <a href="#">Contact</a>
          <a href="#">Terms & Conditions</a>
        </div>

        <div class="single-element social">
          <h6>Social Media</h6>
          <div class="media-links">
            <div class="single-media">
              <div class="media-img">
                <img src="assets/social-1.png" alt="" />
              </div>
              <div class="media-link"><a href="#">Facebook</a></div>
            </div>
            <div class="single-media">
              <div class="media-img">
                <img src="assets/social-2.png" alt="" />
              </div>
              <div class="media-link"><a href="#">Twitter</a></div>
            </div>
            <div class="single-media">
              <div class="media-img">
                <img src="assets/social-3.png" alt="" />
              </div>
              <div class="media-link"><a href="#">Instagram</a></div>
            </div>
          </div>
        </div>

        <div class="single-element address">
          <h6>Address</h6>
          <p>
            497 Evergreen Rd. Roseville, CA 95673 +44 345 678 903
            adobexd@mail.com
          </p>
        </div>

        <div class="single-element"></div>

      </div>
      <div class="all-rights">
        <span>
          &copy;
          <?php echo date('Y'); ?> Built with pride and caffeine. All rights reserved.</span>
      </div>
    </div>

    <!-- Swiper Javascript -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script>
      var swiper = new Swiper(".swiper-container", {
        slidesPerView: "auto",
        spaceBetween: 33,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: false,
        visibilityFullFit: true,
        watchSlidesVisibility: true,
        centeredSlides: true,

        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      function swipeButton() {
        console.log("nieko");
      }
    </script> -->
   
  </body>
</html>
