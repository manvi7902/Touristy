<?php


session_start();
if(isset($_SESSION['username'])) {
    header("Location: risingHangouts.php");
    exit;
}
else{
    header("Location: register.html");
    exit;
}
?>
