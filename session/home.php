<?php

session_start();

if (empty($_SESSION['userData'])) {

    header('LOCATION: index.html');
} else {
    echo 'Welcome to home ' . $_SESSION['userData'] . '<br>';
    echo '<a href="logout.php">LOGOUT</a>';
}
