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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="hangout.css">

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

  <title>Rising Hangout Spots</title>
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
          <a class="nav-link" href="mianpage.php" id="home"><i class="fas fa-paper-plane" id="home"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="wander.php">Wander Blog</a>
        </li>
    </ul>
    <a class="btn btn-primary right-btn " href="login.php"  id="print_name">login</a>
    <a class="btn btn-primary right-btn " href="#" id="sess_var"><?php echo $_SESSION['username']?></a>
    <a class="btn btn-primary" href="register.html"  id="erase">Sign-up</a>
    <a class="btn btn-primary" href="logout.php" id="logout">Logout</a>
</header>

  <!-- background -->
  <section class="home-page">
    <div class="col-md-10 back">
      <div class="quickT">
        <h3>Discover Rising hangout spots</h3>
      </div>
      <div class="cards">
        <section>
          <div class="card col-md-12">
            <img src="fest.jpg" class="card-img-top " alt="...">
            <div class="card-body ">
              <h5 class="card-title">College Fest</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam placeat mollitia
                asperiores quidem dolor delectus numquam in voluptates laudantium, voluptatibus repellendus veniam
                maxime nesciunt cum porro deleniti tenetur, nisi eius?</p>
              <div class="card-actions">
                  <a href="#" class="actions">
                    <img src="bucket2.png" class="action-img" alt="" title="Add to bucket List!">
                    
                  </a>
                  <a href="#" class="">
                    <img src="explore_more.png" alt="" class="action-img" title="Explore further!">
                    
                  </a>
                  <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a trip">
                    
                  </a>
                </div>
            </div>
          </div>
        </section>
        <hr>
        <section>
          <div class="card col-md-12">
            <img src="comedy.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Stand-up Comedy</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam placeat mollitia
                asperiores quidem dolor delectus numquam in voluptates laudantium, voluptatibus repellendus veniam
                maxime nesciunt cum porro deleniti tenetur, nisi eius?</p>
                <div class="card-actions">
                  <a href="#" class="actions">
                    <img src="bucket2.png" class="action-img" alt="" title="Add to bucket List!">
                    
                  </a>
                  <a href="#" class="">
                    <img src="explore_more.png" alt="" class="action-img" title="Explore further!">
                    
                  </a>
                  <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a trip">
                    
                  </a>
                </div>
            </div>
          </div>
        </section>
        <hr>
        <section>
          <div class="card col-md-12">
            <img src="yoga.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Yoga workshop</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet iusto porro autem quia
                veritatis voluptas accusamus architecto molestiae. Eligendi exercitationem ipsam ut nostrum harum cum
                enim unde ratione libero mollitia.</p>
                <div class="card-actions">
                  <a href="#" class="actions">
                    <img src="bucket2.png" class="action-img" alt="" title="Add to bucket List!">
                    
                  </a>
                  <a href="#" class="">
                    <img src="explore_more.png" alt="" class="action-img" title="Explore further!">
                    
                  </a>
                  <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a trip">
                    
                  </a>
                </div>
            </div>
          </div>
        </section>
        <hr>
        <section>
          <div class="card col-md-12">
            <img src="cook.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cooking Workshop</h5>
              <p class="card-text">
                Chef Harsh is a Private Chef from Mumbai, India.
                In this workshop he will be demonstrating some of his favourite Asian sauce recipes that can be easily
                made at home.
                You can top these sauces on your rice, noodles, eggs, pasta, dumplings, dal chawal, literally anything
                (okay maybe not everything, not on an ice cream, macarons or cakes :P)
              </p>
              <div class="card-actions">
                  <a href="#" class="actions">
                    <img src="bucket2.png" class="action-img" alt="" title="Add to bucket List!">
                    
                  </a>
                  <a href="#" class="">
                    <img src="explore_more.png" alt="" class="action-img" title="Explore further!">
                    
                  </a>
                  <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a trip">
                    
                  </a>
                </div>
            </div>
          </div>
        </section>
        <hr>
        <section>
          <div class="card col-md-12">
            <img src="pottery.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Beginner Pottery Workshop</h5>
              <p class="card-text">
                No prior knowledge required.<br>
                2.5 hours / Day ; 3 Days / Week<br>
                Felicitator:<br>
                Maya is an enthusiastic potter whose work is inspired by elements of nature and who loves to create
                Magical illusions with clay.
              </p>
              <div class="card-actions">
                  <a href="#" class="actions">
                    <img src="bucket2.png" class="action-img" alt="" title="Add to bucket List!">
                    
                  </a>
                  <a href="#" class="">
                    <img src="explore_more.png" alt="" class="action-img" title="Explore further!">
                    
                  </a>
                  <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a trip">
                    
                  </a>
                </div>
            </div>
          </div>
        </section>
        <hr>
        <section>
          <div class="card col-md-12">
            <img src="gaming.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gaming Sessions</h5>
              <p class="card-text">
                Enjoy gaming to the fullest by joining in with fellow gamers from all over the world with this open-for
                all session.<br>
                Choose your favourite game from an endless list of games and a timing that suits you best.<br>
                And let's get gaming! What are you waiting for? Get your Consoles ready!
              </p>
              <div class="card-actions">
                  <a href="#" class="actions">
                    <img src="bucket2.png" class="action-img" alt="" title="Add to bucket List!">
                    
                  </a>
                  <a href="#" class="">
                    <img src="explore_more.png" alt="" class="action-img" title="Explore further!">
                    
                  </a>
                  <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a trip">
                    
                  </a>
                </div>
            </div>
          </div>
        </section>
        <hr>
        <section>
          <div class="card col-md-12">
            <img src="ted.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Self-care in Talks</h5>
              <p class="card-text">
                In Talks with Amy Cuddy.<br>
                Listen to Amy Cuddy as she reveals how our body language can change people's perceptions about us-- and
                perhaps our own body chemistry.
                Also learn tips and tricks on social conduct and improving likeness towards people.
                <br> <i>This talk was presented at an official TED conference in New Jersey.</i>
              </p>
              <div class="card-actions">
                  <a href="#" class="actions">
                    <img src="bucket2.png" class="action-img" alt="" title="Add to bucket List!">
                    
                  </a>
                  <a href="#" class="">
                    <img src="explore_more.png" alt="" class="action-img" title="Explore further!">
                    
                  </a>
                  <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a trip">
                    
                  </a>
                </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

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
                <img src="phone.png"></img>+91 9769294987   /   9758658911<br>
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




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>

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