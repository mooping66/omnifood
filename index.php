<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- search engine-->
    <meta
      name="description"
      content="Omnifood is a premium food delivery service with the missing to bring affordable and healty meal to as many people as possible."
    />

    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css" />
    <link rel="preconnect" type="text/css" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" />

    <title>Omnifood</title>
    <!-- Logo title-->
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/resources/favicons/site.webmanifest" />
    <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="/resources/favicons/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />
  </head>

  <body>
    <header>
      <nav>
        <div class="row">
          <!-- main logo-->
          <img class="logo" src="resources/img/logo-white.png" alt="Omnifood logo" />
          <!-- sticky logo-->
          <img class="logo-black" src="resources/img/logo.png" alt="Omnifood logo" />
          <ul class="main-nav js--main-nav">
            <li><a href="#features">Food delivery</a></li>
            <li><a href="#works">How it works</a></li>
            <li><a href="#cities">Our cities</a></li>
            <li><a href="#plans">Sign up</a></li>
          </ul>
          <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
        </div>
      </nav>
      <div class="hero-text-box">
        <h1>Goodbye junk food.<br />Hello super healthy meals.</h1>
        <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry </a>
        <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more </a>
      </div>
    </header>

    <section id="features" class="section-features js--section-features">
      <!-- เริ่มใช้ grid.CSS-->
      <div class="row">
        <!--สัญลักษณ์ (-) ใช้ &mdash -->
        <h2>Get food fast &mdash; not fast food.</h2>
        <p class="long-copy">
          Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that,
          we’re really good at it, we promise!
        </p>
      </div>
      <div class="row js--wp-1">
        <div class="col span-1-of-4 box">
          <!-- การเรียกใช้ icon-->
          <ion-icon class="icon-big" name="infinite-outline"></ion-icon>
          <h3>Up to 365 days/year</h3>
          <p>
            Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more
            flexibly if that's your style.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <ion-icon class="icon-big" name="stopwatch-outline"></ion-icon>
          <h3>Ready in 20 minutes</h3>
          <p>
            You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in
            each town to ensure that you're 100% happy.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <ion-icon class="icon-big" name="leaf-outline"></ion-icon>
          <h3>100% organic</h3>
          <p>
            All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the
            environment, and it also tastes better!
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <ion-icon class="icon-big" name="basket-outline"></ion-icon>
          <h3>Order anything</h3>
          <p>
            We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100
            delicious meals. It's up to you!
          </p>
        </div>
      </div>
    </section>

    <section class="section-meals">
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/4.jpg" alt="Autumn pumpkin soup" />
          </figure>
        </li>
      </ul>
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon" />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries" />
          </figure>
        </li>
      </ul>
    </section>

    <section id="works" class="section-steps">
      <div class="row">
        <h2>How it works &mdash; Simple as 1, 2, 3</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-2 steps-box">
          <img src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2" />
        </div>
        <div class="col span-1-of-2 steps-box">
          <div class="works-step clearfix">
            <div>1</div>
            <p>Choose the subscription plan that best fits your needs and sign up today.</p>
          </div>
          <div class="works-step clearfix">
            <div>2</div>
            <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
          </div>
          <div class="works-step clearfix">
            <div>3</div>
            <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
          </div>
          <a href="#" class="btn-app">
            <img src="resources/img/download-app.svg" alt="App Store Button" />
          </a>
          <a href="#" class="btn-app">
            <img src="resources/img/download-app-android.png" alt="Play Store Button" />
          </a>
        </div>
      </div>
    </section>

    <section id="cities" class="section-cities">
      <div class="row">
        <h2>We're currently in these cities</h2>
      </div>
      <div class="row js--wp-3">
        <div class="col span-1-of-4 box">
          <img src="resources/img/lisbon-3.jpg" alt="Lisbon" />
          <h3>Lisbon</h3>
          <div class="city-feature">
            <ion-icon class="icon-small" name="person-outline"></ion-icon>
            1600+ happy eaters
          </div>
          <div class="city-feature">
            <ion-icon class="icon-small" name="star-outline"></ion-icon>
            60+ top chefs
          </div>
          <div class="city-feature">
            <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
            <a href="#">@omnifood_lx</a>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img src="resources/img/san-francisco.jpg" alt="San Francisco" />
          <h3>San Francisco</h3>
          <div class="city-feature">
            <ion-icon class="icon-small" name="person-outline"></ion-icon>
            3700+ happy eaters
          </div>
          <div class="city-feature">
            <ion-icon class="icon-small" name="star-outline"></ion-icon>
            160+ top chefs
          </div>
          <div class="city-feature">
            <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
            <a href="#">@omnifood_sf</a>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img src="resources/img/berlin.jpg" alt="Berlin" />
          <h3>Berlin</h3>
          <div class="city-feature">
            <ion-icon class="icon-small" name="person-outline"></ion-icon>
            2300+ happy eaters
          </div>
          <div class="city-feature">
            <ion-icon class="icon-small" name="star-outline"></ion-icon>
            110+ top chefs
          </div>
          <div class="city-feature">
            <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
            <a href="#">@omnifood_berlin</a>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img src="resources/img/london.jpg" alt="London" />
          <h3>London</h3>
          <div class="city-feature">
            <ion-icon class="icon-small" name="person-outline"></ion-icon>
            1200+ happy eaters
          </div>
          <div class="city-feature">
            <ion-icon class="icon-small" name="star-outline"></ion-icon>
            50+ top chefs
          </div>
          <div class="city-feature">
            <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
            <a href="#">@omnifood_london</a>
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonials">
      <div class="row">
        <h2>Our customers can't live without us</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <!-- การใส่ " พร้อมข้อความและภาพ -->
          <blockquote>
            Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got
            used to it, I couldn't live without my daily meals!
            <cite> <img src="resources/img/customer-1.jpg" alt="Alberto Duncan" />Alberto Duncan</cite>
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes
            even close to Omifood. Me and my family are so in love!
            <cite> <img src="resources/img/customer-2.jpg" alt="Joana Silva" />Joana Silva</cite>
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            OI was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food
            delivery service in the Bay Area. Keep up the great work!
            <cite> <img src="resources/img/customer-3.jpg" alt="Milton Chapman" />Milton Chapman</cite>
          </blockquote>
        </div>
      </div>
    </section>

    <section id="plans" class="section-plans js--section-plans">
      <div class="row">
        <h2>Sign up and pricing plans</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <div class="plan-box js--wp-4">
            <div>
              <h3>Premium</h3>
              <p class="plan-price">149$ <span>per month</span></p>
              <p class="plan-price-meal">That’s only 14.90$ per meal</p>
            </div>
            <div>
              <ul>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>1 meal every day</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Order 24/7</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Access to newest creations</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Free delivery</li>
              </ul>
            </div>
            <div>
              <a href="#" class="btn btn-full">Sign up now</a>
            </div>
          </div>
        </div>
        <div class="col span-1-of-3">
          <div class="plan-box">
            <div>
              <h3>Pro</h3>
              <p class="plan-price">399$ <span>per month</span></p>
              <p class="plan-price-meal">That’s only 13.30$ per meal</p>
            </div>
            <div>
              <ul>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>1 meal 10 days/month</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Order 24/7</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Access to newest creations</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Free delivery</li>
              </ul>
            </div>
            <div>
              <a href="#" class="btn btn-ghost">Sign up now</a>
            </div>
          </div>
        </div>
        <div class="col span-1-of-3">
          <div class="plan-box">
            <div>
              <h3>Starter</h3>
              <p class="plan-price">19$ <span>per month</span></p>
              <!--สัญลักษณ์ ("_") ใช้ &nbsp -->
              <p class="plan-price-meal">&nbsp;</p>
            </div>
            <div>
              <ul>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>1 meal</li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Order from 8 am to 12 pm</li>
                <li><ion-icon class="icon-small" name="close-outline"></ion-icon></li>
                <li><ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Free delivery</li>
              </ul>
            </div>
            <div>
              <a href="#" class="btn btn-ghost">Sign up now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="form" class="section-form">
      <div class="row">
        <h2>We're happy to hear from you</h2>
      </div>
      <div class="row">
        <!-- ผุกกับ database-->
        <form class="contact-form" method="GET" action="mailer-new.php">
          <div class="row">
           <?php
            if($_GET['seccess'] == 1){
                echo<div class=/"form-messages success/">Thank you! Your massage has been sent.</div>
            }
            else($_GET['error'] == -1){
                echo<div class=/"form-messages error/">Oop! Something went wrong, Please try again.</div>
            }
            ?>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <!-- การใช้ scorbar ไปว่างในช่องที่ต้องการกรอกข้อมูล for="" -->
              <label for="name">Name</label>
            </div>
            <div class="col span-2-of-3">
              <!-- การใช้ box -->
              <input id="name" type="text" name="Name" placeholder="Your name" required />
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label for="email">Email</label>
            </div>
            <div class="col span-2-of-3">
              <input id="email" type="text" name="Email" placeholder="Your e-mail" required />
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label for="find-us">How did you find us?</label>
            </div>
            <div class="col span-2-of-3">
              <!-- การใช้ drop-down box -->
              <select id="find-us" name="Fine-us">
                <!-- เริ่มต้นที่ค่าไหนให้ใส่ selected -->
                <option value="test" selected>---</option>
                <option value="friends">Friends</option>
                <option value="search">Search engine</option>
                <option value="ad">Advertisememt</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label for="news">Newsletter</label>
            </div>
            <div class="col span-2-of-3">
              <!-- การใช้ check box -->
              <!-- ถ้าใส่ checked จะขึ้นเลือกแล้วที่ช่อง check box -->
              <input id="news" type="checkbox" name="news" />Yes, please
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label for="massage">Drop us a line</label>
            </div>
            <div class="col span-2-of-3">
              <!-- การใช้ text area -->
              <textarea id="massage" name="massage" cols="30" rows="10" placeholder="Your massage"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label>&nbsp;</label>
            </div>
            <div class="col span-2-of-3">
              <!-- การใช้ check box -->
              <input name="submit" type="submit" value="Send it"/>
            </div>
          </div>
        </form>
      </div>
    </section>

    <footer>
      <div class="row">
        <div class="col span-1-of-2">
          <ul class="footer-nav">
            <li><a href="#">About us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">iOS App</a></li>
            <li><a href="#">Android App</a></li>
          </ul>
        </div>
        <div class="col span-1-of-2">
          <ul class="social-link">
            <li>
              <a href="#"><ion-icon class="icon-social-facebook" name="logo-facebook"></ion-icon></a>
            </li>
            <li>
              <a href="#"><ion-icon class="icon-social-twitter" name="logo-twitter"></ion-icon></a>
            </li>
            <li>
              <a href="#"><ion-icon class="icon-social-google" name="logo-google"></ion-icon></a>
            </li>
            <li>
              <a href="#"><ion-icon class="icon-social-instagram" name="logo-instagram"></ion-icon></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <p>Copyright &copy; 2021 by Mooping. All right reserved</p>
      </div>
    </footer>
  </body>

  <!-- icon -->
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/respond@0.9.0/main.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
  <!-- x snippet: -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="resources/js/script.js"></script>
  <!-- waypoints -->
  <script src="vendors/js/jquery.waypoints.min.js"></script>
  <!-- google analytics https://analytics.google.com/analytics/web/provision/#/provision/create -->
</html>