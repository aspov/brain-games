<?php
namespace BrainGames\Games\Calc;

define("DESCRIPTION", 'What is the result of the expression?');
define("OPERATORS", ["+", "-", "*"]);
define("MIN_VALUE", 1);
define("MAX_VALUE", 10);

function play()
{
    $operation = OPERATORS[rand(0, count(OPERATORS))];
    $num1 = rand(MIN_VALUE, MAX_VALUE);
    $num2 = rand(MIN_VALUE, MAX_VALUE);
    switch ($operation) {
        case "+":
            $question = "{$num1} + {$num2}";
            $result = $num1 + $num2;
            break;
        case "-":
            $question = "{$num1} - {$num2}";
            $result = $num1 - $num2;
            break;
        case "*":
            $question = "{$num1} * {$num2}";
            $result = $num1 * $num2;
            break;
    }
    return [$question, $result];
}
