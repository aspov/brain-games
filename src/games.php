<?php
namespace BrainGames\Games;

use function \cli\line;
function gcd($a, $b)
{
    $r = $a % $b;
    return ($r != 0) ? gcd($b, $r) : $b;
}

function gameStart($game)
{
    switch ($game) {
        case 'brain-even':
            $description = 'Answer "yes" if number even otherwise answer "no".';
            $value = rand(1, 100);
            $result = $value % 2 == 0 ? 'yes' : 'no';
            return [$description, $value, $result];
        case 'brain-calc':
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
        case 'brain-gcd':
            $description = 'Find the greatest common divisor of given numbers.';
            $num1 = rand(1, 20);
            $num2 = rand(1, 20);
            $value = "{$num1} {$num2}";
            $result = gcd($num1, $num2);
            return [$description, $value, $result];
    }
}
