<!-- 1018 - Cédulas -->
<?php

// Lê o valor como um inteiro
$valor = intval(trim(fgets(STDIN)));

// Armazena o valor original para a saída
$valor_original = $valor;

// Declara as cédulas disponíveis
$cedulas = [100, 50, 20, 10, 5, 2, 1];

// Array para armazenar a quantidade de cada cédula
$quantidade_cedulas = [];

// Calcula a quantidade de cédulas de cada valor
foreach ($cedulas as $cedula) {
    $quantidade_cedulas[$cedula] = intval($valor / $cedula);
    $valor %= $cedula;
}

// Imprime o valor original e a quantidade de cédulas
echo $valor_original . "\n";
foreach ($cedulas as $cedula) {
    echo $quantidade_cedulas[$cedula] . " nota(s) de R$ " . $cedula . ",00\n";
}

?>