<?php
declare(strict_types=1);
function multiply(float $a, float $b): int {
    return $a * $b;
}
$six = multiply(2, 3);
echo gettype($six);