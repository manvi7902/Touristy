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
  <link rel="stylesheet" type="text/css" href="leisure_styles.css">

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

  <title>Leisure Holidays</title>
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
            <a class="nav-link " href="#">Wander Blog</a>
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
        <h3>Trending in Leisure</h3>
      </div>
      <div class="cards">
        <section class="col-md-6">
          <div class="card col-md-12">
            <img src="srinagar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Srinagar, Kashmir</h5>
              <p class="card-text">Famously known as ‘Heaven on Earth’, Srinagar is located in the union territory of Jammu & Kashmir, on the banks of river Jhelum. As picturesque as the most stunning painting to ever be painted, Srinagar is known for the stationary houseboats and colourful Shikararas on Dal Lake.The main draw of Sringara, the gondola-type rowboats - Shikaras.
              <br>
            </p>
            <div class="card-actions">
              <a href="#" class="actions">
                <img src="bucket2.png" class="action-img" alt="" title="Add to Bucket List">
              </a>
              <a href="#" class="">
                <img src="explore_more.png" alt="" class="action-img" title="Explore Further!">
                <span class="tooltip">Explore further!</span>
              </a>
              <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a Trip">
                <span class="tooltip">Plan a trip</span>
              </a>
            </div>
            </div>
          </div>
        </section>

        <div class="vr"></div>

        <section class="col-md-6">
          <div class="card col-md-12">
            <img src="shimla.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Shimla</h5>
              <p class="card-text">
                Shimla is the capital Himachal Pradesh in India and a popular hill-station among Indian families and honeymooners. Situated at the height of 2200m, Shimla was the summer capital of British India. Shimla still retains its old-world charm with beautiful colonial architecture, pedestrian-friendly Mall Road and the ridge lined up with multiple shops, cafes and restaurants.
              </p>
              <div class="card-actions">
                <a href="#" class="actions">
                  <img src="bucket2.png" class="action-img" alt="" title="Add to Bucket List">
                </a>
                <a href="#" class="">
                  <img src="explore_more.png" alt="" class="action-img" title="Explore Further!">
                  <span class="tooltip">Explore further!</span>
                </a>
                <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a Trip">
                  <span class="tooltip">Plan a trip</span>
                </a>
              </div>
            </div>
          </div>
        </section>

        <div class="vr"></div>

        <section class="col-md-6">
          <div class="card col-md-12">
            <img src="nainital.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nainital</h5>
              <p class="card-text">Perched at an elevation of 2,084 metres above sea level, the glittering city of Nainital is hailed for being a parent to the ravishing Naini Lake from which it has earned the epithet of being the lake city. Nainital is not only a famous tourist destination but is also known for its prestigious educational institutions and schools which have stood since British era.

              </p>
              <div class="card-actions">
                <a href="#" class="actions">
                  <img src="bucket2.png" class="action-img" alt="" title="Add to Bucket List">
                </a>
                <a href="#" class="">
                  <img src="explore_more.png" alt="" class="action-img" title="Explore Further!">
                  <span class="tooltip">Explore further!</span>
                </a>
                <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a Trip">
                  <span class="tooltip">Plan a trip</span>
                </a>
              </div>
            </div>
          </div>
        </section>

        <div class="vr"></div>

        <section class="col-md-6">
          <div class="card col-md-12">
            <img src="coorg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Coorg</h5>
              <p class="card-text">Perched at an elevation of 2,084 metres above sea level, the glittering city of Nainital is hailed for being a parent to the ravishing Naini Lake from which it has earned the epithet of being the lake city. Nainital is not only a famous tourist destination but is also known for its prestigious educational institutions and schools which have stood since British era.
              </p>
                <div class="card-actions">
                  <a href="#" class="actions">
                    <img src="bucket2.png" class="action-img" alt="" title="Add to Bucket List">
                  </a>
                  <a href="#" class="">
                    <img src="explore_more.png" alt="" class="action-img" title="Explore Further!">
                    <span class="tooltip">Explore further!</span>
                  </a>
                  <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a Trip">
                    <span class="tooltip">Plan a trip</span>
                  </a>
                </div>
            </div>
          </div>
        </section>

        <div class="vr"></div>

        <section class="col-md-6">
          <div class="card col-md-12">
            <img src="ladakh.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ladakh</h5>
              <p class="card-text">
                 Extending from the Siachen Glacier to the main Great Himalayas, Ladakh is a land like no other. With a superabundance of attractions to visit and fabulous landscapes, amazing people and culture, Ladakh is truly a heaven on Earth. It is said that only in Ladakh can a man sitting in the sun with his feet in the shade suffer from sunstroke and frostbite at the same time.
              </p>
              <div class="card-actions">
                <a href="#" class="actions">
                  <img src="bucket2.png" class="action-img" alt="" title="Add to Bucket List">
                </a>
                <a href="#" class="">
                  <img src="explore_more.png" alt="" class="action-img" title="Explore Further!">
                  <span class="tooltip">Explore further!</span>
                </a>
                <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a Trip">
                  <span class="tooltip">Plan a trip</span>
                </a>
              </div>
            </div>
          </div>
        </section>

        <div class="vr"></div>
        
        <section class="col-md-6">
          <div class="card col-md-12">
            <img src="gangtok.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gangtok</h5>
              <p class="card-text">
                Incredibly alluring, pleasantly boisterous and wreathed in clouds - Gangtok, the capital of Sikkim, is a base for adventure enthusiasts comprising of trekkers and campers to the Himalayan mountain ranges.Lying at the height of 1650 m above sea level, the town during its bright sunny days offers spectacular views of Mt. Kanchenjunga.  
              </p>
              <div class="card-actions">
                <a href="#" class="actions">
                  <img src="bucket2.png" class="action-img" alt="" title="Add to Bucket List">
                </a>
                <a href="#" class="">
                  <img src="explore_more.png" alt="" class="action-img" title="Explore Further!">
                  <span class="tooltip">Explore further!</span>
                </a>
                <a href="#" class=""><img src="plan.png" class="action-img" alt="" title="Plan a Trip">
                  <span class="tooltip">Plan a trip</span>
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