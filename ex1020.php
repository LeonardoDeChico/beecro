<!-- 1020 - Idade em Dias -->
<?php

function calcularIdade($diasTotais) {
    $anos = floor($diasTotais / 365);
    $diasRestantes = $diasTotais % 365;
    $meses = floor($diasRestantes / 30);
    $diasRestantes = $diasRestantes % 30;

    return sprintf("%d ano(s)\n%d mes(es)\n%d dia(s)\n", $anos, $meses, $diasRestantes);
}

$diasTotais = intval(trim(fgets(STDIN)));

echo calcularIdade($diasTotais);
?>