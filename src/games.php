<?php
namespace BrainGames\Games;

use function \cli\line;

function gameStart($game)
{
    switch ($game) {
        case 'brain-even':
            $value = rand(1, 100);
            $result = $value % 2 == 0 ? 'yes' : 'no';
            return [$value, $result];
        case 'brain-calc':
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
            return [$value, $result];
    }
}
