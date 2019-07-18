<?php
namespace BrainGames\Games;

define("GAME_RULE", 'What is the result of the expression?');
define("OPERATION_COUNT", 3);
define("MIN_VALUE", 1);
define("MAX_VALUE", 10);

function play()
{
    $operation = rand(1, OPERATION_COUNT);
    $num1 = rand(MIN_VALUE, MAX_VALUE);
    $num2 = rand(MIN_VALUE, MAX_VALUE);
    switch ($operation) {
        case 1:
            $question = "{$num1} + {$num2}";
            $result = $num1 + $num2;
            break;
        case 2:
            $question = "{$num1} - {$num2}";
            $result = $num1 - $num2;
            break;
        case 3:
            $question = "{$num1} * {$num2}";
            $result = $num1 * $num2;
            break;
    }
    return [$question, $result];
}
