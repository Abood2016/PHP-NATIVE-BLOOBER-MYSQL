<?php


class car
{

  function __construct($name)
  {
    echo $name;  
  }

  function move()
  {
    echo 'move';
  }




  //   public  $color;

  //   function move()
  //   {
  //     echo 'move ' . $this->color;
  //   }
  // }

  // $bmw = new car();

  // $bmw->color = 'red';

  // $bmw->move();

  // echo '<br>';

  // $bmw2 = new car();
  // $bmw2->color = 'green';
  // $bmw2->move();

}

$c = new car('Ahmed');
// $c->move();
