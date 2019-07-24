<?php
namespace BrainGames\Games\Gcd;

use function BrainGames\Cli\run;
const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN_VALUE = 1;
const MAX_VALUE = 20;

function startGame()
{
    run(DESCRIPTION, __NAMESPACE__);
}

function getGcd($a, $b)
{
    $r = $a % $b;
    return ($r != 0) ? getGcd($b, $r) : $b;
}

function play()
{
    $num1 = rand(MIN_VALUE, MAX_VALUE);
    $num2 = rand(MIN_VALUE, MAX_VALUE);
    $question = "$num1 $num2";
    $result = getGcd($num1, $num2);
    return [$question, $result];
}
