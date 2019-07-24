<?php
namespace BrainGames\Games\Progression;

use function BrainGames\Cli\run;
const DESCRIPTION = 'What number is missing in the progression?';
const POSITION_LIMIT = 100;
const LENGTH = 10;
const MIN_VALUE = 1;
const MAX_VALUE = 5;

function startGame()
{
    run(DESCRIPTION, __NAMESPACE__);
}

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
