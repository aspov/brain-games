<?php
namespace BrainGames\Games;

define("GAME_RULE", 'Find the greatest common divisor of given numbers.');
define("MIN_VALUE", 1);
define("MAX_VALUE", 20);

function getGcd($a, $b)
{
    $r = $a % $b;
    return ($r != 0) ? getGcd($b, $r) : $b;
}

function play()
{
    $num1 = rand(MIN_VALUE, MAX_VALUE);
    $num2 = rand(MIN_VALUE, MAX_VALUE);
    $question = "{$num1} {$num2}";
    $result = getGcd($num1, $num2);
    return [$question, $result];
}
