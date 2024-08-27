<!-- 1013 - O Maior -->
<?php

$linha = trim(fgets(STDIN));

list($a, $b, $c) = explode(' ', $linha);

$maior = max($a, $b, $c);

echo $maior . " eh o maior" . "\n";

?>