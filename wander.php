<?php
error_reporting(0);
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- custom css -->
  <link rel="stylesheet" href="wander_style.css">
  <!-- <script type="text/javascript" src="js/slider.js"></script> -->
  
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

  <title>Wander Blog</title>
</head>

<body>

    <!-- navbar here -->
    <header id="hero-nav">
      <ul class="comp-nav">
      <button class="btn btn-primary left-btn"><i class="fas fa-search"></i></button>
      <ul class="nav justify-content-center">
          <li class="nav-item">
              <a class="nav-link " href="mainpage.php#sec2" id="exp">Explore!</a>
          </li>
          <li>
            <a class="nav-link" href="mainpage.php" id="home"><i class="fas fa-paper-plane" id="home"></i></a>
          </li>
      </ul>
      <a class="btn btn-primary right-btn " href="login.php"  id="print_name">login</a>
      <a class="btn btn-primary right-btn " href="#" id="sess_var"><?php echo $_SESSION['username']?></a>
      <a class="btn btn-primary" href="register.html"  id="erase">Sign-up</a>
      <a class="btn btn-primary" href="logout.php" id="logout">Logout</a>
</header>

  <div class="outer">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" id="content">
          <img src="blog.jpg" class="d-block w-100" alt="...">
          <div class="carousel-content-1">
            Roam the world with pictures from <br>all around the globe by Team Touristy
            <br>
            <button class="btn btn-primary btn-lg"> to the Gallery! </button><br>
            <span>or </span><br>
            Share your Own Pictures!
          </div>
        </div>
        <div class="carousel-item">
          <img src="balloon.jpg" class="d-block w-100" alt="...">
          <div class="carousel-content-2">
            Read what our designated Wanderers have to say<br> about their adventures.<br>
            <button class="btn btn-primary btn-lg"> to the Blog </button><br>
            <span>or</span><br>
            Share your own Stories about your wanders.
          </div>
        </div>
        <div class="carousel-item">
          <img src="ocean.jpg" class="d-block w-100" alt="...">
          <div class="carousel-content-3">
            Become a part of Touristy's Team of Wanderers<br> and unlock
            Exclusive Tours,<br>
            Insider knowledge, tips and tricks<br>
            and Merchandise.<br>
            <button class="btn btn-primary btn-lg"> Unlock Now! </button><br> 
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <hr>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="test">
            <img src="testimonial1.jpg" class="people"></img>
            <div>"Nice work on your touristy. We were treated like royalty. I don't know what else to say. I like touristy more and more each day because it makes my life a lot easier."
              <br>- Ossie J.</div>
            <div class="carousel-caption d-none d-md-block">
              <h5>Testimonials</h5>
              <p>What some of our happy customers have to say about us!</p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="test">
            <img src="testimonial2.jpg" class="people"></img>
            <div>"You guys rock! I would like to personally thank you for your outstanding product."
              <br>- Vania.</div>
            <div class="carousel-caption d-none d-md-block">
              <h5>Testimonials</h5>
              <p>What some of our happy customers have to say about us!</p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="test">
            <img src="testimonial3.jpg" class="people"></img>
            <div>"I use touristy often. I like touristy more and more each day because it makes my life a lot easier. It's incredible. I don't know what else to say."
              <br>- Adrick .</div>
            <div class="carousel-caption d-none d-md-block">
              <h5>Testimonials</h5>
              <p>What some of our happy customers have to say about us!</p>
            </div>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <footer>
    <div class="col-md-10 foot">
      <div class="col-md-4 ">
        <span class="topic">About us</span><br>
        <span>
          we belive every outing must be perfect,<br>
          be it just a small brunch with family<br>
          or a long vacation with friends!<br>
          A tiny fish in this massive ocean called the internet,<br>
          wanting to help people not only find but also build their dream.
          Big or small.
        </span>
      </div>
      <div class="col-md-3 ">
        <span class="topic ">Quick Links</span><br>
        <div class="split">
          <span>
            <a href="mainpage.php">Home</a><br>
            <a href="https://forms.gle/XYCzLAtaDm17r7eC7">Tourist's Survey</a><br>
            <a href="wander.php">Wander Blog</a><br>
          </span>
          <span>
            <a href="sessions.php" id="quick">Quick Trips</a><br>
            <a href="sessions1.php" id="leisure">Leisure Holidays</a><br>
            <a href="sessions2.php" id="hangout">Hangout Spots</a><br>
          </span>
        </div>
      </div>
      <div class="col-md-3 ">
        <span class="topic">Contact us!</span><br>
        <span>
          <img src="phone.png"></img>+91 9769294987 / 9758658911<br>
          <!-- <img src="plusphone.png"></img>+91 9758658911<br> -->
          <img src="address.png"></img>Kalbadevi Road, Charni Road Station<br>
          <img src="mail.png"></img>knowTouristy@gmail.com<br>
          <img src="site.png"></img>Touristy.com<br>
        </span>
      </div>
      <div class="col-md-2">
        <div>
          <i class="fab fa-instagram"></i>
          <i>@get_touristy</i><br>
        </div>
        <div>
          <i class="fab fa-facebook-square"></i>
          <i>@get_touristy</i><br>
        </div>
        <div>
          <i class="fab fa-twitter-square"></i>
          <i>@tour_istyy</i><br>
        </div>
      </div>

    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/7a2a09b2a3.js" crossorigin="anonymous"></script>

    <?php
    session_start();
    if(isset($_SESSION['username'])){
        ?>
        <script type="text/javascript">
            document.querySelector("#print_name").style.display="none";
            document.querySelector("#sess_var").style.display="block";

            document.querySelector("#erase").style.display="none";
            document.querySelector("#logout").style.display="block";
        </script>
        <?php
    }
    ?>
</body>

</html>