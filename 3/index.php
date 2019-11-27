<?php

error_reporting(-1); // output all errors show

$title = 'hello world';
// echo $var;
$title = 'page title';
$fruit = 'apple';
$winni_pooh = "hello, i\'m vinni. I have 2 ${fruit}s";

$var = '123';
$Var = '456';

// constants

// 1
define("PAGE", "new page");
define("PAGE", "new page2"); // mistake

// 2

const PAGE2 = 'new const'; // use only in the beginning of the code

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
</head>
<body>

    <h1><?php echo $title; ?></h1>
    <p><?php echo $winni_pooh; ?></p>
    <p><?php echo $Var; ?></p>
    <h1><?php echo PAGE; ?></h1>
    <h1><?php echo "PAGE"; ?></h1> // mistake
    <h1><?php echo PAGE2; ?></h1>

</body>
</html>