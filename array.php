<?php
// Create an array
$numbers = array(10, 20, 30, 40, 50);

// Add more values
$numbers[] = 60;
array_push($numbers, 70);

// Display using print_r
echo "<h3>Array using print_r:</h3>"; print_r($numbers);

// Display using foreach loop
echo "<h3>Array elements:</h3>"; foreach ($numbers as $value) {
echo $value . "<br>";
}

// Display with index
echo "<h3>Array with index:</h3>"; foreach ($numbers as $index => $value) {
echo "Index $index: $value<br>";
}
?>
