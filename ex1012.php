<!-- 1012 - Área -->
<?php
function calcularAreas($a, $b, $c) {
    $pi = 3.14159;
    $triangulo = ($a * $c) / 2;
    $circulo = $pi * $c * $c;
    $trapezio = (($a + $b) * $c) / 2;
    $quadrado = $b * $b;
    $retangulo = $a * $b;

    return [$triangulo, $circulo, $trapezio, $quadrado, $retangulo];
}

$linha = trim(fgets(STDIN));

list($a, $b, $c) = explode(' ', $linha);

$resultados = calcularAreas($a, $b, $c);

echo "TRIANGULO: " . number_format($resultados[0], 3, '.', '') . "\n";
echo "CIRCULO: " . number_format($resultados[1], 3, '.', '') . "\n";
echo "TRAPEZIO: " . number_format($resultados[2], 3, '.', '') . "\n";
echo "QUADRADO: " . number_format($resultados[3], 3, '.', '') . "\n";
echo "RETANGULO: " . number_format($resultados[4], 3, '.', '') . "\n";

?>