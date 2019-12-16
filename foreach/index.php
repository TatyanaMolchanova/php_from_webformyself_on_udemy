<?php error_reporting(-1);

// dropdown with years
// echo '<select>';
// for ($i = 1900; $i <= 2016; $i++) {
//     echo "<option>$i</option>";
// }
// echo '</select>';

$arr = ['Ivanov', 'Petrov', 'Sidorov'];

$arr[5] = 'Pupkin';
$arr[] = 'Pupkin'; // add element in end of array
$arr[] = 'Doe'; 

// print_r($arr);

$names = [
    'Ivan' => 'Ivanov',
    'Petr' => 'Petrov',
    'Sidor' => 'Sidorov',
];

echo '<pre>';
print_r($names);
echo '</pre>';


// just values

foreach($arr as $item) {
    echo $item . '<br>';
}

foreach($names as $name) {
    echo $name . '<br>';
}

// key and values

foreach ($names as $key => $name) {
    echo "Name: $key, Surname: $name <br>";
}

foreach ($arr as $k => $v) {
    echo "Key: $k, Value: $v <br>";
}


foreach ($names as $name => $surname) {
    echo "Name: $name, Surname: $surname <br>";
}

for ($i = 0; $i <= 30; $i++) {
    echo $i . '<br>';
    if ($i == 5) {
        echo '<h1>Found!!!</h1>';
        break;
    }
}

// for ($i = 0; $i <= 30; $i++) {
    
//     if ($i == 10 || $i == 20) continue;
//     echo $i . '<br>';
// }

for ($i = 0; $i <= 30; $i++) {
    
    if ($i >= 10 && $i <= 20) continue;
    echo $i . '<br>';
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