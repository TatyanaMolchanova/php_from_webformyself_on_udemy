<?php error_reporting(-1);

$arr = ['Ivanov', 'Petrov', 'Sidorov'];

$arr[5] = 'Pupkin';
$arr[] = 'Pupkin'; // add element in end of array
$arr[] = 'Doe'; 

print_r($arr);

$names = [
    'Ivan' => 'Ivanov',
    'Petr' => 'Petrov',
    'Sidor' => 'Sidorov',
];

print_r($names);

// $i = 1;
// while ($i < 11) {
//     echo $i . "<br>";
//     $i++;
// }

// for ($i = 1; $i < 11; $i++) {
//     echo "<br>" . $i;
// }

for ($i = 0; $i < count($arr); $i++) {
    echo '<br>' . $arr[$i];
}


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