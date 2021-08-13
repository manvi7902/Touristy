<?php
error_reporting(0);
session_start();
$hostname="localhost"; //local server name default localhost
        $username="root";  //mysql username default is root.
        $password="";       //blank if no password is set for mysql.
        $database="users";  //database name which you created
        $conn=mysqli_connect($hostname,$username,$password,$database);
        if(!$conn)
        {
            die('Connection Failed'.mysql_error());
        }
        else{
            // echo "connected!";
        }
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
    <link rel="stylesheet" type="text/css" href="signing_styles.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <title>signin</title>
</head>

<body>
<header id="hero-nav">
        <ul class="comp-nav">
        <!-- <button class="btn btn-primary left-btn"><i class="fas fa-search"></i></button> -->
        <ul class="nav justify-content-center">
            <li>
              <a class="nav-link " href="mainpage.php" id="home"><i class="fas fa-paper-plane" id="home"></i></a>
            </li>
        </ul>
    </ul>
</header>

    <section class="home-page">
        <div class="row">
            <div class="container outer">
                <div class=" col-md-4 inner">
                    <div class="col-md-12">
                        <h3 class="lead-text">Login using Social Media</h3>
                        <div id="social-platforms">
                            <hr id="or">
                            <div class="media-container">
                                <a class="btnn btnn-icon btnn-facebook" href="#"><i class="fa fa-facebook">
                                    </i><span>Facebook</span></a>
                            </div>
                            <hr id="or">
                            <div class="media-container">
                                <a class="btnn btnn-icon btnn-google" href="#"><i class="fa fa-google">
                                    </i><span>Google</span></a>
                            </div>
                            <hr id="or">
                        </div>
                    </div>
                </div>

                <div class="col-md-7 inner-2">
                    <div class="col-md-10 regi-form">
                        <h3 class="lead-text"> Login using Username </h3>
                        <form method="POST">
                            <div class="form-group">
                                <label class="form-labels">
                                    Username
                                </label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-labels">
                                    password
                                </label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            <div class="form-group d-flex justify-content-around align-items-center ">
                                <div class="split_data">
                                    <input type="checkbox" checked>
                                    <label class="form-labels ">
                                        Remember me!
                                    </label>
                                </div>
                                <a href="#">
                                <input type="submit" class="btn btn-primary " name="go" value="Go!"></input></a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


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
    // session_set_cookie_params(86400,'C:/xampp/htdocs/project_php/' );
        // session_start();

        if(isset($_POST['go'])){
            $username=$_POST['username'];
            $_SESSION['username']=$_POST['username'];
            // echo $_SESSION['username'];
            $pass=$_POST['password'];
            $fetchsql = "SELECT * FROM regis WHERE Name = '$username' && password = '$pass'";
            $result=mysqli_query($conn, $fetchsql);
            // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
          
            if($count == 1){  
                // echo $_SESSION['username'];
                 ?>
                 <script type="text/javascript"> 
                    window.location.replace('mainpage.php');
                  </script>
                 <?php
            }   
            else{
                echo"HEll naw";
            }
        }
        

    ?>
</body>

</html>