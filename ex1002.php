<!-- 1002 Área do Círculo -->
<?php 
$pi = 3.14159; 
$b = trim(fgets(STDIN));

$area = $pi * pow($b, 2);
/*
A função pow em PHP é usada para calcular a potência de um número. Ela eleva um número (a base) a uma certa potência (o expoente).
*/
$areaFormatada = number_format($area, 4, '.', '');

echo "A=" . $areaFormatada . PHP_EOL; 
?>