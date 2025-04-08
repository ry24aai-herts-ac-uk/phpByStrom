<?php
// <input type="number" name="age" id="age">;
// //Take user input for age
// $age = $_POST['Age'] ?? '';
// echo '<input type="number" name="Age" id="age" default="" onchange="this.form.submit()" value=0"' . htmlspecialchars($age) . '">';
// // Check if age is a number
// if (!is_numeric($age)) {
//     echo "Please enter a valid number for age<br>";
//     exit;
// }
$age = 65;
echo"<br> Age of user is $age<br>";

// Comparison Operators
if ($age>=18) {
    echo "You are eligible to vote<br>";
} else {
    echo "You are not eligible to vote<br>";
}
$voted = true;
if ($age>=18 && !$voted == false) {
    echo "You Must vote<br>";
} else {
    echo "You cannot vote<br>";
    echo "Apply for voter ID in:" . 18-$age . " years<br>";
}

// Ternary Operator
echo "<br>";
echo "You are " . ($age >= 18 ? "eligible" : "not eligible") . " to vote<br>";
// Null Coalescing Operator
$age = $_POST['age'] ?? 0;
echo "Your age is " . ($age ?? "not provided") . "<br>";

$gender =  'male';
// Switch Case
if ($age>= 0 && $age <= 12) {
    echo "You are a child<br>";
} elseif ($age > 12 && $age < 18) {
    echo "You are a teenager<br>";
} elseif ($age >= 18 && $age < 60) {
    switch ($gender){
        case "male":
            echo "you are a man<br>";
        case "female":
            echo "wou are a woman<br>";
        case "other":
            echo "you are a person<br>";
        default:
            echo "you are a person<br>";
    }
    echo "You are an adult<br>";
} else {
    echo "You are a senior citizen<br>";
}

?>