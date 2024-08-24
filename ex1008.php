<!-- 1008 - Salário -->
<?php

$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = floatval(fgets(STDIN));

$number = $a;

$sal = $b * $c;

$salFormatado = number_format($sal, 2, ".", "");

echo "NUMBER = " . $number . "\n" . "SALARY = U$ " . $salFormatado . "\n";  

?>