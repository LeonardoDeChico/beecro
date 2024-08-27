<!-- 1019 - Conversão de Tempo -->
<?php

$segundos = intval(fgets(STDIN));

$horas = floor($segundos / 3600);
$minutos = floor(($segundos % 3600) / 60);
$segundosRestantes = floor($segundos % 60);


echo $horas . ":" . $minutos . ":" . $segundosRestantes . "\n";
?>