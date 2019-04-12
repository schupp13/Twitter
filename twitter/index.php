<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Twitter</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="container-fluid app">
      <!--Row 1 of 2  -->
      <div class="row">
        <!-- LEFT COLUMN -->
        <div class="col-sm-6 leftcol d-flex justify-content-center align-items-center">
          <div class="flex-column messages ">
            <div class="d-flex align-items-center"><img src="img/searchclear.png" alt="" class="message-images"><h6>Follow your interests.</h6></div>
            <div class="d-flex align-items-center"><img src="img/Speakclear.png" alt="" class="message-images"><h6>Hear what people are talking about.</h6></div>
            <div class="d-flex align-items-center"><img src="img/peopleclear.png" alt="" class="message-images"><h6>Join the conversation.</h6></div>
          </div>
        </div>
        <!--End LEFT COLUMN -->
        <!-- RIGH COLUMN -->
        <div class="col-sm-6 rightcol d-flex flex-column justify-content-center align-items-center ">
          <div class="align-items-start login-form flex-grow-1">
            <form class="form-inline " action="/action_page.php">
              <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="phone, email, or username">
              <input type="password" class="form-control mb-2 mr-sm-2" id="pwd" placeholder="password">
              <button class='login-button'type="submit" class="btn btn-primary mb-2">Log in</button>
            </form>
          </div>

          <div class="slogan-div flex-grow-1">
          <img src="img/twitter_bird.PNG" style="height: 45px;"alt="">
          <h1 id="slogan">See whats happening in<br> the world today.</h1>
          <h4 id="join">Join Twitter today.</h4>
            <div class="big-buttons d-flex flex-column btn-block ">
              <button class="signup"type="button" name="button">Sign Up</button>
              <button class="login"type="button" name="button">Log in</button>
            </div>
          </div>
        </div>
      </div>
      <!--End Right COLUMN -->
      <!--End of Row 1 -->
      <!--Row 2 of 2  -->
    <div class="row">
          <div class="col-sm-12">
            <div class="footer-list">
              <ul class="d-flex  align-items-center justify-content-around flex-wrap">
                <li><a href="#">About</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Satus</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Ads info</a></li>
                <li><a href="#">Brand</a></li>
                <li><a href="#">Apps</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Developers</a></li>
                <li><a href="#">Directory</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">&copy; 2019 Twitter </a></li>
              </ul>
            </div>

          </div>
      </div>
      <!--End Row 2 -->
    </div>

  </body>
</html>
