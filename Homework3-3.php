<?php
$n = $_GET["n"];
$fib = [0, 1];
$n++;

for ($i = 2; $i <= $n; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

echo "<b>피보나치 수열</b><br>";

for ($i = 1; $i < $n; $i++) {
    $fi = $fib[$i];
    $next = $fib[$i + 1];
    $ratio = $fi != 0 ? round($next / $fi, 5) : "∞";

    echo "<td>$i  </td>";
    echo "<td>$fi  </td>";
    echo "<td>$ratio</td><br>";
}
?>