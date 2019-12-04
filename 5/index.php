<?php

// echo 2 ** 3; // Xвозведение в степень
// echo pow(2, 4);// Xвозведение в степень 

// $a = 5;
// $b = $a;
// var_dump($a);
// var_dump($b);
// $a = 7;
// $b = $a;
// var_dump($a);
// var_dump($b);
// var_dump($b);


$a = 5;
$b = &$a; // присваивание по ссылке
var_dump($a);
$a = 7;
$b = 9;
var_dump($a);
var_dump($b);


echo 5 + 't9ext';
?>