<?php 

error_reporting(-1);

$arr = array('Ivanov', 'Petrov', 'Sidorov');
var_dump($arr);

echo $arr;

print_r($arr);

echo "</pre>";

echo $arr[0];

echo $arr{2};

$arr2 = [1,2,['banana', 'orange', 'apple'],4,'cat',5,6,7,8,9,10,];
echo "</pre>";
print_r($arr2);
echo "</pre>";

echo $arr2[2][1];


$arr3 = [2 => 'Ivanov', 5 => 'Petrov', 10=>'Sidorov', 'Pupkin'];
// $arr3 = [
//     2 => 'Ivanov', 
//     'Petrov', 
//     'Sidorov'
// ];
var_dump($arr3);

echo $arr3[10];

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'description' => 'Description',
    ],
    [
        'title' => 'iPad',
        'price' => 1000,
        'description' => 'Description',
    ]
];
echo "</pre>";
print_r($goods);
echo "</pre>";

echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
echo '<br>';
echo $goods[1]['title'] . ' - ' . $goods[1]['price'];

// $i = 0;
// while ($i <= 1) {
//     echo $goods[$i]['title'];
//     echo $goods[$i]['price'];
//     echo $goods[$i]['description'];
//     $i++;
// }

$i = 0;
while ($i <= 1) {
    echo '<br>' . $goods[$i]['title'] . ' - ' . $goods[$i]['price']  . ' - ' . $goods[$i]['description']  . '<br>';
    $i++;
}


// how to add a new man (item) to array

$arr4 = array('Ivanov', 'Petrov', 'Sidorov');

$arr4[] = 'Pupkin';
$arr4[1] = 'Strange'; // rewrite 1-st index
$arr4[15] = 'Mister X';

echo '<pre>';
print_r($arr4);
echo '</pre>';



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
    
</body>
</html>