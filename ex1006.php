<!-- 1006 Média 2 -->
<?php

$a = floatval(fgets(STDIN));
$b = floatval(fgets(STDIN));
$c = floatval(fgets(STDIN));

$media = ($a * 2 + $b * 3 + $c * 5) / 10;

$mediaFormatada = number_format($media, 1, '.', '');
echo "MEDIA = " . $mediaFormatada . "\n";
?>