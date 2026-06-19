<!DOCTYPE html>
<html>
<head>
    <title>PHP Demo</title>
</head>
<body>

<?php

echo "<h1>Welcome to PHP!</h1>";

// Variables
$name = "Nghia";
$age = 21;

echo "<p>Name: $name</p>";
echo "<p>Age: $age</p>";

// Conditional statement
if ($age >= 18) {
    echo "<p>You are an adult.</p>";
} else {
    echo "<p>You are a minor.</p>";
}

// Arithmetic
$a = 15;
$b = 7;

echo "<h2>Math Operations</h2>";
echo "<p>Addition: " . ($a + $b) . "</p>";
echo "<p>Subtraction: " . ($a - $b) . "</p>";
echo "<p>Multiplication: " . ($a * $b) . "</p>";
echo "<p>Division: " . ($a / $b) . "</p>";

// Loop
echo "<h2>Numbers from 1 to 5</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// Array
$subjects = ["English", "Chinese", "PHP", "Linguistics"];

echo "<h2>Subjects</h2>";
foreach ($subjects as $subject) {
    echo "- $subject <br>";
}

// Function
function greet($person) {
    return "Hello, $person!";
}

echo "<h2>Function Example</h2>";
echo greet($name);

// Associative Array
$student = [
    "name" => "Nghia",
    "major" => "English Studies",
    "year" => 4
];

echo "<h2>Student Information</h2>";
echo "Name: " . $student["name"] . "<br>";
echo "Major: " . $student["major"] . "<br>";
echo "Year: " . $student["year"] . "<br>";

// Current date and time
echo "<h2>Date and Time</h2>";
echo date("l, F j, Y - h:i:s A");

?>

</body>
</html>
