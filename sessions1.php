<?php


session_start();
if(isset($_SESSION['username'])) {
    header("Location: leisure.php");
    exit;
}
else{
    header("Location: register.html");
    exit;
}
