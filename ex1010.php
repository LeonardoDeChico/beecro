<!-- 1010 - Cálculo Simples -->
<?php
$e1 = fgets(STDIN);
$e2 = fgets(STDIN);

$dados1 = explode(' ', $e1);
$dados2 = explode(' ', $e2);
/*
função explode em PHP é utilizada para dividir uma string em um array com base em um delimitador específico. Esse delimitador pode ser qualquer caractere ou conjunto de caracteres que você deseja usar para separar a string.
*/

$codigo1 = intval($dados1[0]);
$quantidade1 = intval($dados1[1]);
$preco1 = floatval($dados1[2]);

$codigo2 = intval($dados2[0]);
$quantidade2 = intval($dados2[1]);
$preco2 = floatval($dados2[2]);

$total = ($quantidade1 * $preco1) + ($quantidade2 * $preco2);

$result = number_format($total, 2, '.', '');
echo "VALOR A PAGAR: R$ " . $result . "\n"
?>