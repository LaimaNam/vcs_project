<?php session_start(); ?>

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
   <nav>
        <div class="main-wrapper default-width split">
                <div class="nav-login">
                    <?php 
                        if(isset($_SESSION['u_id'])){
                    ?>
                            <form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="submit" class="button round-button login-button">Logout</button></form>
                    <?php
                        } else {
                    ?>
                            <form action="includes/login.inc.php" method="post">
                            <input type="text" name="uid" placeholder="Username" />
                            <input type="password" name="pwd" placeholder="Password" />
                            <button type="submit" name="submit" class="button round-button login-button">Login</button>
            

                        </form>
                        <a href="signup.php" class="button round-button login-button">Sign up</a>
                    <?php
                        }
                    ?>

                </div>
        </div>
    </nav> 

    <!-- Section: page header -->
    <div class="page-header default-width">
      <div class="navigation split">
        <!-- Logo -->
        <div class="logo">
          <a href="index.php"> <img src="assets/logo.png" alt="logo" /> </a>
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