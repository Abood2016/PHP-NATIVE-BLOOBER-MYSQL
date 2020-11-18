<?php

// class human
// {
//     public $color;
//     private $name;

//     function setname($n)
//     {
//         $this->name = $n;
//     }
//     function gettname()
//     {
//         return $this->name;
//     }


//     function move()
//     {
//         echo 'Move Ya ' . $this->name;
//     }
// }

// $h = new human();
// $h->setname('Ahmed');
// $h->move();

// class person extends human
// {
// }

// class bird extends human
// {
// }

// $bird = new bird();

// $bird->name = 'Ali';
// $bird->move();


// abstract class car
// {
//     abstract function move();
//     function color()
//     {

//     }

// }

// class bmw extends car{

//     function move()
//     {
//         echo 'Move';
//     }

// }


// interface guid
// {
//     function help();
// }

// interface car 
// {
//     function move();
// }


// class bmw implements car, guid
// {
//     function move()
//     {
//         echo 'Move';
//     }

//     function help()
//     {
//         echo 'help';
//     }
// }

// class car
// {
//     public static $name = 'Ahmed';
//     const con = '127.0.0.1';
//     public static function  move()
//     {
//         echo 'move ', self::con;
//     }
// }

// car::move();



// trait pone
// {
//       function phone1()
//       {
//           echo 'phone';
//       }  
// }


// trait car
// {
//     function car1()
//     {
//         echo 'car';
//     }  
// }

// class person {

//     use pone;
//     use car;

// }