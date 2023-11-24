<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice php</title>
</head>
<body>
<?php

    $name = 'Nabil';
    $age = 21;
    $isMale = true;
    $height = 1.5;
    $salary = null;
    $cost = '255.12';

    echo $name . '<br>';
    echo gettype($isMale). '<br>';

    var_dump($name, $age, $isMale, $height, $salary );
    echo '<br>';
    $myNum = intval($cost);
    var_dump($myNum);
    echo '<br>';

?>
    
    
</body>
</html>