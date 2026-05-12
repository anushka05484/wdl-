<?php 
$str = "Hello PHP"; 
echo "<h2>String Operations </h2>"; 
echo "Original String: " .$str. "<br>"; 
echo "Length: " .strlen($str). "<br>"; 
echo "Reversed String:" .strrev($str). "<br>"; 
echo "Substring (0,5): " .substr($str, 0, 5). "<br>"; 
echo "Uppercase: " .strtoupper($str). "<br>"; 
echo "Lowercase: " .strtolower($str); 
?> 
