<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <section class="main">
      <nav>
        <a href="# class="logo"">
          <img src="images/logo1.png" alt="logo">
        </a>

        <ul class="menu">
          <li>  <a href="#" class="active">Home</a> </li>
          <li>  <a href="#features">Features</a> </li>
          <li>  <a href="#about">About</a> </li>
          <li>  <a href="#contact">Contact</a> </li>
        </ul>
      </nav>

      <div class="main-heading">
        <h1>Create Prespectives With Virtual Reality</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="main-btn">Contact</a>
      </div>
    </section>
    <section class="features" id="features">
      <div class="feature-container">
        <div class="feature-box">
          <div class="f-img">
            <img src="images/info-icon1.png" alt="">
          </div>
          <div class="f-text">
            <h4>Web Development</h4>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="#" class="main-btn">Check</a>
          </div>
        </div>
        <div class="feature-box">
          <div class="f-img">
            <img src="images/info-icon1.png" alt="">
          </div>
          <div class="f-text">
            <h4>Software Development</h4>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="#" class="main-btn">Check</a>
          </div>
        </div>
        <div class="feature-box">
          <div class="f-img">
            <img src="images/info-icon3.png" alt="">
          </div>
          <div class="f-text">
            <h4>App Development</h4>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="#" class="main-btn">Check</a>
          </div>
        </div>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about-img">
        <img src="images/about.png" alt="">
      </div>
      <div class="about-text">
        <h2>Start Tracking Your Statistics</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <button class="main-btn">Read More</button>
      </div>
    </section>
    <section class="contact" id="contact">
      <div class="contact-heading">
        <h1>Contact Us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <form class="" action="userinformation.php" method="post">
        <input type="text" name="user" value="" placeholder="Your Full Name">
        <input type="text" name="email" value="" placeholder="Your e-mail">
        <textarea name="message" placeholder="Type your message here..."></textarea>
        <button class="main-btn contact-btn" type="submit" name="button">Continue</button>
      </form>
    </section>
  </body>
</html>
