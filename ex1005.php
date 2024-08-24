<!-- 1005 Media 1 -->
<?php

$a = floatval(fgets(STDIN));
$b = floatval(fgets(STDIN));

$media = ($a * 3.5 + $b * 7.5) / 11;

$mediaFormatada = number_format($media, 5, '.', '');

echo "MEDIA = " . $mediaFormatada . "\n";

?>