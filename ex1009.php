<!-- 1009 - Salário com Bônus -->
<?php

$a = strval(fgets(STDIN));
$b = floatval(fgets(STDIN));
$c = floatval(fgets(STDIN));

$sal = $b + ($c * 0.15);

$result = number_format($sal,2,".","");

echo "TOTAL = R$ " . $result . "\n";
?>