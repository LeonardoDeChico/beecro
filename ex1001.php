<!-- 1001 - Extremamente basico -->

<?php

$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));
// fgets(STDIN): Lê uma linha de entrada da entrada padrão (teclado, ou qualquer que seja o fluxo de entrada usado). O intval converte o valor lido em um inteiro.

$soma = $num1+$num2;

echo "X = " . $soma . PHP_EOL;
/* 
PHP_EOL é uma constante pré-definida no PHP que representa a sequência de caracteres usada para terminar uma linha, dependendo do sistema operacional em que o PHP está sendo executado. O nome EOL vem de "End Of Line" (Fim de Linha).

Unix/Linux: Usa o caractere de nova linha \n.
Windows: Usa a sequência de dois caracteres \r\n.
Mac (antigos sistemas): Usava apenas \r, embora isso não seja mais comum.
*/