<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice php</title>
</head>

<body>

    <?php

    $str = "Hello, World!";
    $length = strlen($str);
    echo $length . '<br>';  // Output: 13

    $str = "Hello, World!";
    $newStr = str_replace("World", "PHP", $str);
    echo $newStr;  // Output: Hello, PHP!

    $str = "Hello, World!";
    $position = strpos($str, "World");
    echo $position;  // Output: 7

    $str = "Hello, World!";
    $substring = substr($str, 7, 5);  // Start at position 7, take 5 characters
    echo $substring;  // Output: World

    $str = "Hello, World!";
    $lowercase = strtolower($str);
    $uppercase = strtoupper($str);
    echo $lowercase;  // Output: hello, world!
    echo $uppercase;  // Output: HELLO, WORLD!

    $str = "   Hello, World!   ";
    $trimmedStr = trim($str);
    echo $trimmedStr;  // Output: Hello, World!

    $arr = ["apple", "banana", "orange"];
    $str1 = implode(", ", $arr);
    echo $str1;  // Output: apple, banana, orange

    $str2 = "apple, banana, orange";
    $arr2 = explode(", ", $str2);
    print_r($arr2);  // Output: Array ( [0] => apple [1] => banana [2] => orange )

    $str = "Hello, World!";
    $reversedStr = strrev($str);
    echo $reversedStr;  // Output: !dlroW ,olleH






    ?>


</body>

</html>