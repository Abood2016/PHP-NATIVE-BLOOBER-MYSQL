<?php
session_start();


//$_POST is super global

// print_r($_POST) .'<br>';
// echo $_POST['age'];


// echo empty($_REQUEST['name']);
// isset();

// echo isset($_REQUEST['name']);
// if (isset($_REQUEST['name'])) {
//     echo 'True';
// } else {
//     echo 'False';
// }

// $data;

// foreach ($data as $key => $value) {

//     if ($key == 'password') {
//         echo $key . ' :- ' . md5($value) . '<br>';
//     } else {
//         echo $key . ' :- ' . $value . '<br>';
//     }
// }

$name = 'Abed';

$_SESSION['name'] = $name;