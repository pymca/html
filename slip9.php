<?php
$f = "count.txt";

$c = file_exists($f) ? file_get_contents($f) : 0;

$c++;

file_put_contents($f,$c);

echo "Total Visitors = ".$c;
?>
