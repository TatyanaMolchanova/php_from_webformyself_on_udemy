<?php error_reporting(-1);

$names = [
    'Ivan' => 'Ivanov',
    'Petr' => 'Petrov',
    'Sidor' => 'Sidorov',
];

// foreach($names as $name => $surname)
//     echo "Name: $name, Surname: $surname <br>";
// endforeach;

$var = 2;

switch($var) {
    case 1: 
        echo 'Variable = 1';
        break;
    case 2: 
        echo 'Variable = 2';
        break;
    case 3: 
        echo 'Variable = 3';
        break;
    case 4: 
        echo 'Variable = 4';
        break;
    default: 
        echo 'Something else';
}

$bool = true;
$str1 = 1;
$str2 = 2;
$str3 = 3;

var_dump($bool);
var_dump(1);


// simple syntax

// if ($bool) {
//     echo '
//     <table class="table" border="1">
//         <tr>
//             <td>' . $str1  . '</td>
//             <td>' . $str2  . '</td>
//             <td>' . $str3  . '</td>
//         </tr3>
//     </table3>';

// };
?>
// alternative syntax

<?php if($bool): ?>
    echo '
    <table class="table" border="1">
        <tr>
            <td><?php echo $str1 ?></td>
            <td><?php echo $str2 ?></td>
            <td><?php echo $str3 ?></td>
        </tr3>
    </table3>';

<?php endif; ?>



<?php foreach($names as $name => $surname): ?>
    Name: <?php echo $name ?>, Surname: <?php echo $surname ?> <br>
<?php endforeach; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- <table>
    <tr>
        <td>Item 1</td>
        <td>Item 2</td>
        <td>Item 3</td>
    </tr3>
</table3> -->
    
</body>
</html>