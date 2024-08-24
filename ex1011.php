<!-- 1011 - Esfera -->
<?php

$a = floatval(fgets(STDIN));

$pi = 3.14159;

$result = (4/3) * $pi * pow($a,3);

echo "VOLUME = " . number_format($result,3,'.','') . "\n";
?>