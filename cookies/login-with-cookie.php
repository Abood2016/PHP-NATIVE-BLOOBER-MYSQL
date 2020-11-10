<?php

$username = 'AbedElRahman';
$password = '123456';


if ($username == $_POST['name'] && $password == $_POST['password']) {
    setcookie('username', $_POST['name'] , time() + 86400, '/');
    header('LOCATION:home.php');
}else {
    header('LOCATION:index.html');
}
