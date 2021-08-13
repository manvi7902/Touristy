 <?php
error_reporting(0);
session_start();
// echo $_SESSION['username'];
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
    <link rel="stylesheet" type="text/css" href="mp_styles.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <title>index</title>
</head>

<body>
    <!-- Home navbar here -->
    <header id="hero-nav">
        <ul class="comp-nav">
        <button class="btn btn-primary left-btn"><i class="fas fa-search"></i></button>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link " href="#sec2" id="exp">Explore!</a>
            </li>
            <li>
              <a class="nav-link" href="#" id="home"><i class="fas fa-paper-plane" id="home"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="wander.php">Wander Blog</a>
            </li>
        </ul>
        <a class="btn btn-primary right-btn " href="login.php"  id="print_name">login</a>
        <a class="btn btn-primary right-btn " href="#" id="sess_var"><?php echo $_SESSION['username']?></a>
        <a class="btn btn-primary" href="register.html"  id="erase">Sign-up</a>
        <a class="btn btn-primary" href="logout.php" id="logout">Logout</a>
    </ul>
</header>

    <!-- background -->
    <section class="home-page">
        <div class="shade">
            <div class="hero-text">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-xs-12">
                            <div class="title-text">
                                <img src="final_logo.png" class="logoo">
                                TOURISTY
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center subs">
                        <div class="col-xs-12">
                            <div class="sub-text">
                                Where have you been and where should you go?
                            </div>
                        </div>
                    </div>
                    <div class="survey-row ">
                        <div class="col-xs-12">
                            <a class="survey-link" href="https://forms.gle/XYCzLAtaDm17r7eC7">Take the survey</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 2 -->
    <section class="exploring" id="sec2">
        <div class="row sec2 d-flex justify-content-end">
            <!-- <div class="col-sm-5 col-lg-6"></div> -->
            <div class="col-sm-9 d-flex flex-column align-items-end contain">
                <div class="d-flex justify-content-end rounded">
                    <a href="#" class="expAround">Explore Around</a>
                </div>
                <div>
                    <h2 class="blue-bg rounded"> Explore trending
                        <br>
                        <a href="sessions.php" class="links" id="quick">Quicky Trips!</a><br><br>
                        <a href="sessions1.php" class="links" id="leisure">Leisure Holidays!<br></a><br>
                        <a href="sessions2.php" class="links" id="hangout">Rising Hangout Spots!</a>
                        <br>And more!
                    </h2>
                </div>
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

    <!-- Waypoints lib -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script> -->
    <script src="imakewebthings-waypoints-34d9f6d/lib/jquery.waypoints.min.js"></script>
    
    <!-- logout javascript -->
    <script src="logout.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/7a2a09b2a3.js" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function(){
        if (window.location.pathname+window.location.hash == 'http://localhost/project_php/mainpage.php#sec2') {
        $("#exp").addClass('bluee');
        $("#home").removeClass('bluee');
        }
        if(window.location.pathname+window.location.hash=='http://localhost/project_php/mainpage.php'){
        $("#home").addClass('bluee');
        $("#exp").removeClass('bluee'); 
        }
        })
    </script>


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
    else{
        ?>
        <script type="text/javascript">
            document.querySelector("#print_name").style.display="block";
            document.querySelector("#sess_var").style.display="none";

            document.querySelector("#erase").style.display="block";
            document.querySelector("#logout").style.display="none";
        </script>
        <?php
    }
    ?>
</body>

</html>
