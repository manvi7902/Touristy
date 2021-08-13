<?php

session_start();
// unset($_SESSION['username']);
session_unset();
// echo $_SESSION['username'];
header("Location:mainpage.php");

?>