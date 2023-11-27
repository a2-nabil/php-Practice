<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice php</title>
</head>
<body>

<?php
    $number = 123664.5562;
    echo number_format($number, 2, '.', ',') . '<br>';

    $name = 'Nabil';
    $nText = 'Hello I am '.$name.'. I am 21  ';
    
    echo $nText . '<br>';


    $name2 = "Nabil";
    $nText2 = "Hello I am .$name. I am 21  ";
    echo $nText2 . '<br>';


?>
    
    
</body>
</html>