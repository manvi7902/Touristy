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
  <link rel="stylesheet" type="text/css" href="quick_styles.css">

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

  <title>Quick Trips</title>
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
        <h3>Discover Quick Trips</h3>
      </div>
      <div class="cards">
        <section>
          <div class="card col-md-12">
            <img src="maha.jpg" class="card-img-top " alt="...">
            <div class="card-body ">
              <h5 class="card-title">Mahabaleshwar</h5>
              <p class="card-text">Nestled in the picturesque Western Ghats, tourist places in Mahabaleshwar will captivate your imagination with their natural splendor. Mahabaleshwar is well known for its numerous rivers, magnificent cascades, and majestic peaks. The city comprises of ancient temples, boarding schools, manicured and lush green dense forest, waterfalls, hills, valleys that will take your breath away on your visit.

                <br>
                Distance from Mumbai: 263.2 Km
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
            <img src="pawna.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pawna Lake</h5>
              <p class="card-text">Pawna Lake is an artificial reservoir formed by water of its namesake dam. Situated towards the outskirts of Lonavala, this lake is a popular picnic and leisure spot. ... While enjoying a boat ride on the lake, tourists get magnificent views of three ancient citadels – Tikona, Lohagad and Tunga.
                <br> Distance from Mumbai:  116.9 Km
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
            <img src="kundali.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kundalika</h5>
              <p class="card-text">The biggest attraction in Kolad is the ‘Kundalika River Rafting’. The source of Kundalika River is from Tamhini Ghat and it flows through Kolad village and is a perfect place for rafting for amateurs.Rafting starts from the lower side of Bhira Dam and runs into Dolwahal Dam. Enjoy rafting in this 12 km water stretch which is full of exciting rapids of grade 3 type making it a fun-filled for 2 hour activity.
                <br>Distance from Mumbai: 113.1Km
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
            <img src="matheran.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Matheran</h5>
              <p class="card-text">Nestled amidst the Sahyadri range on the Western Ghats, Matheran is a cosy little hill station that stands at an elevation of 2600 feet above sea level, and is just 100 kilometres away from Mumbai, making it the perfect weekend getaway. With its name literally translating to “overhead forest”, Matheran is the smallest hill station in India but is extremely popular in terms of tourists looking for a short trip amid spectacular vistas and serenity.
                <br> Distance from Mumbai:  83 Km
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
            <img src="raigad.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Raigad</h5>
              <p class="card-text">The aesthetically appealing Raigad Fort is a strategically constructed hill fort in the Raigad district of Maharastra, India. Built by the vibrant Maratha ruler, Chhatrapati Shivaji Maharaj, Raigad was the capital city of the illustrious Maratha Sovereign in the old times. The fort is located in the Sahyadri mountain range, and is only accessible by a pathway on one side, through several steps in a stiff climb, while the other sides are surrounded by deep valleys draped in green.
                <br> Distance from Mumbai:  66.2Km
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
            <img src="bhandardara.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bhandardara</h5>
              <p class="card-text">Located on the banks of River Pravara, Bhandardara is a hill station nestled in the Sahyadri mountain range in Maharashtra. According to a legend, sage Agastya meditated here for a year. Pleased with his penance, gods blessed him with a stream of River Ganga, now known as River Pravara. Bhandardara is crisscrossed by trekking trails and dotted with forts. The famous Mount Kalsubai, the highest peak in Maharashtra, is a favorite among trekkers. The trek to the 200-year-old Ratangad Fort is also popular as is the trek to sixth century Harishchandragad Fort. Blessed with lush greenery, Bhandardara is also a popular stopover for tourists travelling to Nashik and Shirdi.
                <br> Distance from Mumbai:  163.4Km
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
            <img src="lavasa.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lavassa</h5>
              <p class="card-text">Lavasa is a privately planned hill city located near Pune in Maharashtra. This modern day hill station is an enjoyable retreat for all its visitors and has a lot to offer to its tourists from picturesque sceneries to an extremely well-developed infrastructure including hotels, resorts, educational institutes, malls, residential property, IT companies etc. Lavasa is turning out to be a new hangout for people looking for a small trip away from the hustle and bustle of hectic city life. It is absolutely a leisure holiday destination located in the middle of lush green hills.
                <br>Distance from Mumbai: 187.5Km
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