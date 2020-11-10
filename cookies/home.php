<?php


if (isset($_COOKIE)) {
    
    echo 'Welcome '. $_COOKIE['username'] . '<br>';
    echo '<a href="logout.php">Logout</a>';

} else {
    header('LOCATION:index.html');
}