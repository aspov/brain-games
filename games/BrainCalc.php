<?php
namespace BrainGames\Games;

function BrainCalc()
{
    $description = 'What is the result of the expression?';
    $variant = rand(0, 2);
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    if ($variant == 0) {
        $value = "{$num1} + {$num2}";
        $result = $num1 + $num2;
    }
    if ($variant == 1) {
        $value = "{$num1} - {$num2}";
        $result = $num1 - $num2;
    }
    if ($variant == 2) {
        $value = "{$num1} * {$num2}";
        $result = $num1 * $num2;
    }
    return [$description, $value, $result];
}
