<?php
$a = 10;
$b = 5;

function addNumbers($x, $y) {
    $result = $x + $y;
    return $result;
}

function multiplyNumbers($x, $y) {
    $result = $x * $y;
    return $result;
}

$sum = addNumbers($a, $b);
echo "The sum of $a and $b is: $sum\n";

$product = multiplyNumbers($a, $b);
echo "The product of $a and $b is: $product\n";

$finalResult = $sum + $product;
echo "The final result is: $finalResult\n";
