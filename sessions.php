<?php


session_start();
if(isset($_SESSION['username'])) {
    header("Location: quickTrips.php");
    exit;
}
else{
    header("Location: register.html");
    exit;
}
