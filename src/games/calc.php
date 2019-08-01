<?php
namespace BrainGames\games\сalc;

use function BrainGames\engine\run;
const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ["+", "-", "*"];
const MIN_VALUE = 1;
const MAX_VALUE = 10;

function startGame($round = false)
{
    if (!$round) {
        $getGameData = function ($round) {
            return startGame($round);
        };
        run(DESCRIPTION, $getGameData);
    }

    $operation = OPERATORS[rand(0, count(OPERATORS) - 1)];
    $num1 = rand(MIN_VALUE, MAX_VALUE);
    $num2 = rand(MIN_VALUE, MAX_VALUE);
    $question = "$num1 $operation $num2";
    switch ($operation) {
        case "+":
            $correctAnswer = $num1 + $num2;
            break;
        case "-":
            $correctAnswer = $num1 - $num2;
            break;
        case "*":
            $correctAnswer = $num1 * $num2;
            break;
    }
    return [$question, $correctAnswer];
}
