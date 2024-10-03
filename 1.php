<?php
function isFibonacci($num) {
    $a = 0;
    $b = 1;

    if ($num == $a || $num == $b) {
        return "$num pertence à sequência de Fibonacci.";
    }

    while ($b < $num) {
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }

    return ($b == $num) ? "$num pertence à sequência de Fibonacci." : "$num não pertence à sequência de Fibonacci.";
}

// Teste com número definido
$num = 9;
echo isFibonacci($num);
?>
