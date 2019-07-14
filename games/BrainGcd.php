<?php
namespace BrainGames\Games;

function gcd($a, $b)
{
    $r = $a % $b;
    return ($r != 0) ? gcd($b, $r) : $b;
}

function BrainGcd()
{
    $description = 'Find the greatest common divisor of given numbers.';
    $num1 = rand(1, 20);
    $num2 = rand(1, 20);
    $value = "{$num1} {$num2}";
    $result = gcd($num1, $num2);
    return [$description, $value, $result];
}
