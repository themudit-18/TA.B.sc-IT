<?php
$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j < $n; $j++) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "$i ";
    }
    echo "<br>";
}
?>
