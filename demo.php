<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
</head>

<body>

    <?php
    echo "abs(-15)" . abs(-12) . '<br>';
    echo "abs(-15)" . pow(2, 8) . '<br>';

    // Number functions example 

    $number = -10;
    $absoluteValue = abs($number);
    echo $absoluteValue;  // Output: 10

    echo '<br>';

    $number = 4.3;
    $ceiledValue = ceil($number);
    echo $ceiledValue;  // Output: 5

    echo '<br>';
    
    $number = 4.8;
    $flooredValue = floor($number);
    echo $flooredValue;  // Output: 4

    echo '<br>';
    
    $number = 4.6;
    $roundedValue = round($number);
    echo $roundedValue;  // Output: 5

    echo '<br>';
    
    $randomNumber = rand(1, 10);  // Generates a random number between 1 and 10
    echo $randomNumber;

    echo '<br>';
    
    $number = 25;
    $sqrtValue = sqrt($number);
    echo $sqrtValue;  // Output: 5

    echo '<br>';
    
    $base = 2;
    $exponent = 3;
    $result = pow($base, $exponent);
    echo $result;  // Output: 8

    echo '<br>';
    
    $numbers = [3, 1, 7, 5, 2,'kala'];
    $minimum = min($numbers);
    $maximum = max($numbers);
    echo $minimum;  // Output: 1
    echo $maximum;  // Output: 7

    echo '<br>';
    



    ?>

</body>

</html>