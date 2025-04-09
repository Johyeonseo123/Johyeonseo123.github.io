<?php
$n = 29;
$sum = 0;
$prod = 1;
for($i = 0; $i < $n;) {
    $i++;
    echo(" {$i} +");
    $sum = $sum + $i;
}
$i++; $sum = $sum + $i;
echo("{$i} = {$sum} <br>");

for($i = 0; $i < $n;) {
    $i++;
    echo(" {$i} *");
    $prod = $prod * $i;
}
$i++; $prod = $prod * $i;
echo("{$i} = {$prod}");
 ?> 