<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">

      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.html"><img src="images/logo-default-450x37.png" alt="" width="225" height="18"/></a>
                  </div>
                </div>
                <div class="rd-navbar-aside-right rd-navbar-collapse">
                  <ul class="rd-navbar-corporate-contacts">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                        <div class="unit-body">
                          <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                      </div>
                    </li>
                  </ul><a class="button button-md button-default-outline-2 button-ujarak" href="#">Get a Free Quote</a>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                  </ul>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>












      <?php

      session_start();

    //  if(
    //      isset($_SESSION['username'])
    //    && isset($_SESSION['role'])
    //      && !empty($_SESSION['username'])
    //      && !empty($_SESSION['role'])
  //    ){
          ///already logged in user
          $role = $_SESSION['role'];
          $username = $_SESSION['username'];

          ?>
              <!DOCTYPE html>

              <html lang="en">
                  <head>
                      <meta charset="utf-8">
                      <title>Home</title>

                      <style>

                      body {
                              background-color:  pink;
                          }

                      .text{

                                  height: 25px;
                                  border-radius: 5px;
                                  padding: 2px;
                                  border: solid thin #aaa;
                                  width: 90%;
                              }


                              #button{

                                  padding: 10px;
                                  width: 120px;
                                  color: white;
                                  background-color: FireBrick;
                                  border: none;
                              }

                              #box{

                                  background-color: AliceBlue;
                                  margin: auto;
                                  width: 300px;
                                  padding: 20px;
                              }


                          #ptable{
                              width: 100%;
                              border: 1px solid blue;
                              border-collapse: collapse;
                          }

                          #ptable th, #ptable td{
                              border: 1px solid blue;
                              border-collapse: collapse;
                              text-align: center;
                          }

                          #ptable tr:hover{
                              background-color: bisque;
                          }


                          .text{
                              height: 25px;
                              border-radius: 5px;
                              padding: 2px;
                              border: solid thin #aaa;
                              width: 90%;
                          }

                          .header {
                            background-color: #333;
                            overflow: hidden;
                          }

                          .header left {
                            float: left;
                            color: #f2f2f2;
                            text-align: center;
                            padding: 14px 16px;
                            text-decoration: none;
                            font-size: 30px;
                          }

                          .header right {
                            float: right;
                            color: #f2f2f2;
                            text-align: center;
                            padding: 14px 16px;
                            text-decoration: none;
                            font-size: 20px;
                          }


                      </style>

                  </head>

                  <body>

                    <h1 class="header">
                      <left>Tours & Travel</left>

                      <right>

                        <input id="button" type="button" value="My Profile" onclick="profile()">
                        <input type="button" id="button" value="Logout" onclick="logout();">
                        <input type="button" id="button" value="Settings" onclick="Settings();">
                      </right>

                    </h1>

                      <br><br>



                      <br>
                      <br>

                      <form id="box" action="search.php" method="GET">

                      <div style="font-size: 20px;margin: 10px;">Welcome
                      <?php

                      ?></div>

                          <input class="text" type="search" id="search" name="search" placeholder="Member">
                          <br><br>
                          <select class="text" id="choose" name="choose">
                          <option value="Places">Places</option>
                          <option value="placeholder">placeholder</option>
                          <option value="Car">Car</option>
                          <option value="Hotels">Hotels</option>
                          <option value="tickets">tickets</option>
                          <option value="Addvertisement">Addvertisement</option>
                          <option value="Guides">Guide</option>
                          </select>
                          <br><br>
                          <input id="button" type="submit" value="Search">
                      </form>
                      <br>
                      <br>
                      <input id="button" type="button" value="All members" onclick="allmembers();">
                      <input id="button" type="button" value="All block" onclick="block()">
                      <input id="button" type="button" value="All review" onclick="review();">


                      <input id="button" type="button" value="All guide" onclick="allguide();">
                      <input id="button" type="button" value="All Hotels" onclick="allhotels();">
                      <input id="button" type="button" value="All placeholder" onclick="allplaceholder()">

                      <div>
                        <br>
                        <br>


                        <?php
                        try{
                            ///PDO = PHP Data Object
                            $conn=new PDO("mysql:host=localhost:3306;dbname=go_travel;","root","");
                            ///setting 1 environment variable
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            ///mysql query string
                            $mysqlquery1="SELECT * FROM product";
                            $returnobj1=$conn->query($mysqlquery1);

                            $mysqlquery2="SELECT * FROM farmer";
                            $returnobj2=$conn->query($mysqlquery2);

                            $mysqlquery3="SELECT * FROM buyer";
                            $returnobj3=$conn->query($mysqlquery3);


                            ?>

                            <h2> Total Products : <?php echo $returnobj1->rowCount()?></h2>
                            <h2> Total Sellers : <?php echo $returnobj2->rowCount()?></h2>
                            <h2> Total Buyers : <?php echo $returnobj3->rowCount()?></h2>


                        <?php
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="6">No values found</td>
                                <tr>
                            <?php
                        }


                        ?>

                      </div>


                      <script>
                          function home(){
                              location.assign('adminhome.php');   ///default GET method
                          }
                          function logout(){
                              location.assign('logout.php');   ///default GET method
                          }

                          function profile(){
                              location.assign('profile.php');   ///default GET method
                          }

                          function block(){
                          location.assign('block.php');   ///default GET method
                          }


                          function allmembers(){
                          location.assign('allmembers.php');
                          }

                          function review(){
                              location.assign('review.php');
                          }


                          function allplaceholder()(){
                              location.assign('allplaceholder.php');
                          }
                          function allguide(){
                              location.assign('allguide.php');
                          }
                          function allhotels(){
                              location.assign('allhotels.php');
                          }

                          function Settings(){
                              location.assign('setting.php');
                          }


                      </script>


                  </body>
              </html>

        <!--  <?php
    //  }
    //  else{
          ?>
              <script>alert("login first!");</script>
              <script>location.assign("login.php");</script>
          <?php
//      }


      ?> -->










<!-- Eikhane change korbiiii -->


       <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
          <div class="container">
            <div class="row row-40 justify-content-lg-between">
              <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Contact us</h6>
                    <ul class="footer-contacts d-inline-block d-sm-block">
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                          <div class="unit-body"><a class="link-aemail" href="mailto:#">info@demolink.org</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInDown" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Popular news</h6>
                    <!-- Post Minimal 2-->
                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title"><a href="#">Your Personal Guide to 5 Best Places to Visit on Earth</a></p>
                      <div class="post-minimal-2-time">
                        <time datetime="2019-05-04">May 04, 2019</time>
                      </div>
                    </article>
                    <!-- Post Minimal 2-->
                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title"><a href="#">Top 10 Hotels: Rating by Wonder Tour Travel Experts</a></p>
                      <div class="post-minimal-2-time">
                        <time datetime="2019-05-04">May 04, 2019</time>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Quick links</h6>
                    <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                      <li><a href="about.html">About us</a></li>
                      <li><a href="#">Our Tours</a></li>
                      <li><a href="#">Our Team</a></li>
                      <li><a href="#">Gallery</a></li>
                      <li><a href="#">Blog</a></li>
                    </ul>
                    <div class="group-md group-middle justify-content-sm-start"><a class="button button-lg button-primary button-ujarak" href="#">Get in touch</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-corporate-bottom-panel">
          <div class="container">
            <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
              <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                <div>
                  <ul class="list-inline list-inline-sm footer-social-list-2">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 order-sm-first">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Wonder Tour</span>. All Rights Reserved. Design by <a href="https://www.templatemonster.com">TemplateMonster</a></p>
              </div>
              <div class="col-sm-6 col-md-4 text-md-right">
                <p class="rights"><a href="#">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
