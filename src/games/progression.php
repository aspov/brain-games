<?php
namespace BrainGames\Games\Progression;

define("DESCRIPTION", 'What number is missing in the progression?');
define("POSITION_LIMIT", 100);
define("LENGTH", 10);
define("MIN_VALUE", 1);
define("MAX_VALUE", 5);

function play()
{
    $position = rand(1, POSITION_LIMIT);
    $step = rand(MIN_VALUE, MAX_VALUE);
    $hiddenValue = rand(0, LENGTH - 1);
    
    for ($i = 0; $i < LENGTH; $i++) {
        $progression[] = $position + $step * $i;
    }
    $result = $progression[$hiddenValue];
    $progression[$hiddenValue] = '..';
    $question = implode($progression, ' ');
    return [$question, $result];
}
