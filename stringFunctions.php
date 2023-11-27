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





    ?>


</body>

</html>