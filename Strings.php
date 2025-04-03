<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
    $name = "Rajasekhar Yadavalli";
    $age = 30;
    $height = 5.8;
    $married = false;
    $hobbies = array("Reading", "Traveling", "Cooking");

    echo strtoupper($name) . "<br>";
    echo is_int($age) . "<br>";
    echo is_bool($married) . "<br>";
    echo is_array($hobbies) . "<br>";
    echo is_float($height) . "<br>";

    ?>   
</body>
</html>