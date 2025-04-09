<?php
$n = $_GET["n"];
$bata = [];

for ($i = 0; $i <= $n; $i++) {
    $bata[] = rand(1,100);
}

$numbers = $bata;
sort($numbers);

for ($i = 0; $i < 10; $i++) {
    echo $bata[$i] . " - " . $numbers[$i]. "<br>";
}
?>