<!--  1017 - Gasto de Combustível -->
<?php

$v1 = intval(fgets(STDIN));
$v2 = intval(fgets(STDIN));

$result = ($v1 * $v2) / 12;

echo NUMBER_FORMAT($result, 3, '.', '') . "\n";
?>