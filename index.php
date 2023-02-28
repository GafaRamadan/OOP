<?php 

// include 'user.php';

// $user = new User;
// $user ->name = "John";
// $user ->insert();
// var_dump($user);

// echo "<hr>";

// $user2 = new User;

// $user2->name = "mohamedan";
// $user2->insert();
// var_dump($user2);

include('calc.php');

$calc = new Calc;
$calc->x = 15;
$calc->y = 10;
$calc->mult()->print();