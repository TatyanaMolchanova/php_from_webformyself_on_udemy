<?php error_reporting(-1);

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

$arr = array('Ivanov', 'Petrov', 'Sidorov');

echo count($arr);
echo '<br>';
echo count($goods, 1);
echo '<br>';

$result7 =array_rand($arr);

echo '<br>';
print_r($result7);
echo '<br>';

$result8 =array_reverse($arr, true);

echo '<br>';
print_r($result8);
echo '<br>';

// $array1 = array("a" => "green", "red", "blue", "red");
// $array2 = array("b" => "green", "yellow", "red");
// $result = array_diff($array1, $array2);
// $result2 = array_intersect($array1, $array2);

// print_r($result);
// echo '<br>';
// print_r($result2);

$result3 = array_keys($arr);
$result4 = array_keys($goods[0]);
$result5 = array_values($goods[0]);

echo '<br>';
print_r($result3);
echo '<br>';
print_r($result4);
echo '<br>';
print_r($result5);

echo '<br>';
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "Массив содержит элемент 'first'.";
}
echo '<br>';



$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
$result6 = $array1 + $array2;
print_r($result);
echo '<br>';
print_r($result6);
echo '<br>';


// $city  = "San Francisco";
// $state = "CA";
// $event = "SIGGRAPH";

// $result10 = [
//     'city' => $city,
//     'state'=> $state,
//     'event' => $event,
// ];

// echo '<br>';
// $result10 = compact("city", "state", "event");
// print_r($result10);
// echo '<br>';

$result11 = [
    'city' => 'SF',
    'state'=> 'CA',
    'event' => 'do',
];

print_r($result11);
echo '<br>';

extract($result11);
echo $state;


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