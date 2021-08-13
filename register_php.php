<?php
// session_set_cookie_params(86400,'C:/xampp/htdocs/project_php/' );
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
        
    }
    
    $name=$_POST['name'];
    $_SESSION['username']=$name;
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $insertquery="INSERT INTO regis(name, email, password) VALUES ('$name', '$email', '$pass')";
 
    if(mysqli_query($conn, $insertquery))
    {
        ?>
        <script type="text/javascript">window.location.replace("mainpage.php");</script>
        <?php
    }
    else{
        echo "Error: " . $insertquery . "
    " . mysqli_error($conn);
    }
    
    ?>