<?php
$name = "Rajasekhar Yadavalli";
$age = 30;
$height = 5.8;
$married = false;
$hobbies = array("Reading", "Traveling", "Cooking");

// variable existance

if (isset($name)) {
    echo "Variable name is set.<br>";
} else {
    echo "Variable name is not set.<br>";
}

echo "<h1>My name is $name</h1>";
echo "<p>I am $age years old.</p>";
echo "<p>My height is $height feet.</p>";
echo "<p>Am I married? " . ($married ? "Yes" : "No") . "</p>";
echo "<p>My hobbies are: " . implode(", ", $hobbies) . "</p>";
echo "Type of variable name: " . gettype($name) . "<br>";
echo "Type of variable age: " . gettype($age) . "<br>"; 
echo "Type of Variable height ". gettype($height) . "<br>";
echo "Type of variable married: " . gettype($married) . "<br>";
echo "Type of variable hobbies: " . gettype($hobbies) . "<br>";

?>

