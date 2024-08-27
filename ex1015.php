<!-- 1015 - Distância Entre Dois Pontos -->
<?php

$en1 = trim(fgets(STDIN));
$en2 = trim(fgets(STDIN));

$p1 = explode(' ', $en1);
$p2 = explode(' ', $en2);

$x1 = floatval($p1[0]);
$y1 = floatval($p1[1]);
$x2 = floatval($p2[0]);
$y2 = floatval($p2[1]);

$distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

echo number_format($distancia, 4, '.', '') . "\n";

?>