<?php
namespace BrainGames\Games;

define("GAME_RULE", 'What number is missing in the progression?');
define("POSITION_LIMIT", 100);
define("MIN_VALUE", 1);
define("MAX_VALUE", 5);

function play()
{
    $position = rand(1, POSITION_LIMIT);
    $step = rand(MIN_VALUE, MAX_VALUE);
    $progressionRange = 10;
    $hiddenPosition = rand(0, $progressionRange - 1);
    
    for ($i = 0; $i < $progressionRange; $i++) {
        $values[] = $position;
        $position += $step;
    }
    $result = $values[$hiddenPosition];
    $values[$hiddenPosition] = '..';
    $question = implode($values, ' ');
    return [$question, $result];
}
