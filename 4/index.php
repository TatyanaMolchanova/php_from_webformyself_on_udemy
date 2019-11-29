<?php
error_reporting(-1);

// $this ='123';

$is_auth = false; // by default

$is_auth = true; // if user is authorized
echo $is_auth;

var_dump($is_auth); // function for debug

echo gettype($is_auth); // function for debug seldom used

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
$intgr = '-10' + 15;
var_dump($intgr);

$fl = 1.2;
var_dump($fl);

$var = 10;
$str ='This is string. $var';
var_dump($str);

$str2 = "This \"is\" \$ string. $var"; // variable reflect its value in double quotes
var_dump($str2);

$str3 = "This is string. {$var}"; // variable in figure quotes
var_dump($str3);

// HEREDOC - code withous symbol of screening - кавычки без символа экранирования

$str4 = <<<LAVE
"HEREDOC "string". {$var}"
LAVE;

echo $str4;

// NOWDOC - as in once quotes variables are not processed

$str5 = <<<'LAVE'
"NOWDOC "string". {$var}"
LAVE;

echo $str5


?>
    
</body>
</html>