<?php 

require_once 'funcs.php';

$nums = [1,2,3];
$names = ['Ivanov', 'Petrov'];
$names2 = ['Ivan' => 'Ivanov', 'Petr' => 'Petrov'];
$test = [];


// echo count($nums);
// echo count($names);

$keys = array_keys($nums);
print_r($keys);

$keys2 = my_array_keys($nums);
print_r($keys2);

$keys3 = my_array_keys($names);
print_r($keys3);

$keys4 = my_array_keys($names2);
print_r($keys4);

$key5 = my_array_keys($test);
print_r($keys5);

// function part 2

// $x = 100;
// $y = 10;

// $a = 200;

// sum(5, 7);
// sum(10, 5);
// sum(5,10 );
// sum($x, $y);
// sum();
// sum(100);

// echo $a;

// function part 3

// $a = 5;
// $b = 10;

// echo $a;
// echo '<br>';
// sum($a, $b);
// echo $a;


// function part 4

// echo sum(1, 2);
// echo 5 + sum(1, 2);

// $res = sum(1, 2);
// echo $res;

?>