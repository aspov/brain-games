<?php
namespace BrainGames\games\gcd;

use function BrainGames\Cli\run;
const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN_VALUE = 1;
const MAX_VALUE = 20;

function startGame()
{
    $getGameData = function () {
        return getGameData();
    };
    run(DESCRIPTION, $getGameData);
}

function getGcd($a, $b)
{
    $r = $a % $b;
    return ($r != 0) ? getGcd($b, $r) : $b;
}

function getGameData()
{
    $num1 = rand(MIN_VALUE, MAX_VALUE);
    $num2 = rand(MIN_VALUE, MAX_VALUE);
    $question = "$num1 $num2";
    $correctAnswer = getGcd($num1, $num2);
    return [$question, $correctAnswer];
}
