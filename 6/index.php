<?php

error_reporting(-1);

// $i = 1;
// while ($i <= 10) {
//     echo $i . '<br>';
//     $i++;
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    // $a = 5;
    // var_dump($a--); // at first return than decrease
    // var_dump(++$a); // at first increase than return
    // var_dump($a);

    // $str1 = 'Hello,';
    // $str2 = ' world';
    // echo $str3 = $str1 . $str2;

    // $fruit = "apple";
    // echo $winnit_pooh = 'Hello, I"m Winnie. I have 2 ' . $fruit . 's';

    // $a = 5;
    // // $a = $a + 2;
    // $a *= 2;
    // var_dump($a);

    // $str1 = 'Hello,';
    // echo $str1 .= ' world';

    // NULL

    // var_dump($var);
    
    // $var = '';
    // unset($var);
    // var_dump($var);

    // $var = NULL;
    // // $var++;
    // $var--;
    // var_dump($var);

// task

// $i = 1;
// echo "<table border='1'> \n";
// while ($i <= 10) {
//     echo "\t <tr> \n";
//     $n = 1;
//     while ($n <= 3) {
//         echo "\t\t<td>Row $i  | Col - $n</td>\n";
//         $n++;
//     }
//     echo "\t</tr>\n";
//     $i++;
// }
// echo "</table>";



// task 2

// $year = 1900;
// echo "<select> \n";
//     while ($year <= 2019) {
//         echo "\t<option value='$year'>$year</option>";
//         $year++;
//     }
// echo "</select>";

// task 3

// $i = 11;
// while ($i <= 10) {
//     echo $i++ . '<br>';
// }

// $i = 11;
// do {
//     echo $i++ . '<br>';
// } while ($i <= 10)


// multiply table

$i = 1;
echo "<table border='1'> \n";
while ($i <= 10) {
    echo "\t <tr> \n";
    $n = 1;
    while ($n <= 10) {
        echo "\t\t<td>$i * $n</td>\n";
        $n++;
    }
    echo "\t</tr>\n";
    $i++;
}
echo "</table>";



?>








</body>
</html>