<?php
namespace BrainGames\games\gcd;

use function BrainGames\engine\run;
const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN_VALUE = 1;
const MAX_VALUE = 20;

function getGcd($a, $b)
{
    $r = $a % $b;
    return ($r != 0) ? getGcd($b, $r) : $b;
}

function startGame()
{
    $getGameData = function () {
        $num1 = rand(MIN_VALUE, MAX_VALUE);
        $num2 = rand(MIN_VALUE, MAX_VALUE);
        $question = "$num1 $num2";
        $correctAnswer = getGcd($num1, $num2);
        return [$question, $correctAnswer];
    };
    run(DESCRIPTION, $getGameData);
}
