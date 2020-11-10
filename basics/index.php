<?php

// session_start();


// $toto = "1000.5";

// to get the type of variable
// echo gettype($toto);

// if (gettype($toto) == 'string'):

//     echo 'Mohmemd is string';
// elseif(gettype($toto) == 'integer'):
//     echo 'Mohmemd is integer';

// else:
//     echo 'Mohmemd is Not string';
// endif;


// switch ($toto) {

//     case gettype($toto) == 'string':
//         echo 'Mohammed is string';
//         break;

//     case gettype($toto) == 'integer':
//         echo 'Mohammed is integer';
//         break;

//     case gettype($toto) == 'double':
//         echo 'Mohammed is double';
//         break;

//     default:
//         echo 'Mohammed is  Not String';
//         break;
// }

// if(true):

// elseif(true):

// else:
// endif;


// $avg = 99;

// switch ($avg) {

//     case ($avg >= 90):
//         echo 'Exellent';
//         break;

//     case ($avg >= 80):
//         echo 'Very Good';
//         break;

//     case ($avg >= 70):
//         echo 'Good';
//         break;

//     case ($avg >= 60):
//         echo 'mtwast';
//         break;

//     default:
//         echo 'Fails';
//         break;
// }

// if ($avg >= 90 && $avg < 100) :
//     echo 'Exellent';
// elseif ($avg >= 80 && $avg < 90) :
//     echo 'Very Good';
// elseif ($avg >= 70 && $avg < 80) :
//     echo 'Good';
// elseif ($avg >= 60 && $avg < 70) :
//     echo 'Mtwast';
// else :
//     echo 'Fails';
// endif;


// for ($i=0; $i < 10; $i++):
//    if ($i == 5) {
//      echo 'Abed El Rahman <br>';
//     }else {
//         echo $i;
//         echo '<br>';
//     }
// endfor;

// $i = 0;
// while ($i < 10):
//     echo $i;
//     $i++;
// endwhile;


// $i = 0;
// do {
//     echo $i;
//     $i++;
// } while ($i < 10);


//ternary oprators

// echo (20 > 10) ? 'true' : 'false';


// functions in PHP

// function sum($n,$x){

//     if (gettype($n) == 'integer' && gettype($x) == 'integer') {
//         echo $n + $x;
//     }else {
//         echo 'x or n must be number';
//     }
// }

// // //call the function 

// sum(20,20);


//Array in PHP

//numaric array
//          0        1         2
$names = ['Ahmed', 'Mohammed', 'Ali', 'aya'];

// print_r($names);

// echo $names[2];

// foreach ($names as $key => $value){
//     echo  $value . '<br>';
// }



$names = ['Ahmed', 'Mohammed', 'Ali', 'aya'];

// for ($i=0; $i < count($names); $i++) { 
//     echo $names[$i];
//     echo '<br>';
// }

// $count = count($names);  //افضل ك performance

// for ($i=0; $i < $count; $i++) { 
//     echo $names[$i];
//     echo '<br>';
// }


//associtive array

// $names = ['name'=>'Ahmed','age'=> 20,'gender' => 'Male'];

// foreach ($names as $key => $value) {

//     echo $key . ' : ' .$value .'<br>';
//     // echo $value . '<br>';

// }


//mulidiemntional array

// $users = [
//     ['name' => 'Ahmed', 'age' => 20, 'gender' => 'Male'],
//     ['name' => 'abed', 'age' => 25, 'gender' => 'Male'],
//     ['name' => 'aya', 'age' => 22, 'gender' => 'Female'],
// ];

// $u = array(
//     array('name' => 'Ahmed', 'age' => 20, 'gender' => 'Male'),
//     array('name' => 'abed', 'age' => 25, 'gender' => 'Male'),
//     array('name' => 'aya', 'age' => 22, 'gender' => 'Female'),
// );


// foreach ($u as $key => $value) :
//     foreach ($value as $key => $item) :
//         echo $key . ' : ' . $item . '<br>';
//     endforeach;
//     echo '<hr>';
// endforeach;


// echo $_SESSION['name'];


// $posts = [

//     ['Title' => 'Post1', 'Article' => 'the end is near'],
//     ['Title' => 'Post2', 'Article' => 'the end is near'],
//     ['Title' => 'Post3', 'Article' => 'the end is near'],
//     ['Title' => 'Post4', 'Article' => 'the end is near'],

// ];

// foreach ($posts as $key => $value) {
//     foreach ($value as $key => $item) {
//         echo  $key . ' :- ' . $item . '<br>';
//     }
// }



//to create cookie

// setcookie('key','value',86400,'/');

//func to find max num in array
// function largest($nums)
// {
//     return  max($nums);
// }

// echo largest([10, 20, 50]);
