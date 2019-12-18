<?php 

// // function sum($a, $b) {
// function sum($a = 1, $b = 2) {
//     echo $a + $b;
//     echo '<br>';
// }

// function part 2

// function sum($a = 1, $b = 2) {
//     $a = 300;
//     echo $a + $b;
//     echo '<br>';
// }

// function part 3

    // function sum(&$a, $b) {
    //     echo $a + $b;
    //     echo '<br>';
    //     $a = 100;
    // }


    // function part 4

    // function sum($a, $b) {
    //     $c = $a + $b;
    //     return $c;
    //     // return $a + $b;
    // }

    // function part 5

  function my_array_keys($arr) {
    $data = [];
    foreach ($arr as $k => $v) {
        $data[] = $k;
    }
    return $data;
  }
?>