<!-- 1014 - Consumo -->
<?php

$x = intval(fgets(STDIN));
$y = floatval(fgets(STDIN));

$result = $x / $y;

echo number_format($result, 3, '.', '') . " km/l" . "\n";

?>