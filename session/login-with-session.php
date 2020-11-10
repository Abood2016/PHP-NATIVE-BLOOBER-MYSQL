<?php

session_start();

//db
$username = "AbedElRahman";
$password = "123456";



if ($username == $_POST['name'] && $password == $_POST['password']) {
    $_SESSION['userData'] = $_POST['name'];
    header('LOCATION:home.php');
} else {
    header('LOCATION:index.html');
}
