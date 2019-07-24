<?php
namespace BrainGames\Games\Calc;

use function BrainGames\Cli\run;
const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ["+", "-", "*"];
const MIN_VALUE = 1;
const MAX_VALUE = 10;

function startGame()
{
    run(DESCRIPTION, __NAMESPACE__);
}

function play()
{
    $operation = OPERATORS[rand(0, count(OPERATORS) - 1)];
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
