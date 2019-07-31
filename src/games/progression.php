<?php
namespace BrainGames\games\progression;

use function BrainGames\engine\run;
const DESCRIPTION = 'What number is missing in the progression?';
const POSITION_LIMIT = 100;
const LENGTH = 10;
const MIN_VALUE = 1;
const MAX_VALUE = 5;

function startGame($round = false)
{
    if (!$round) {
        $getGameData = function ($round) {
            return startGame($round);
        };
        return run(DESCRIPTION, $getGameData);
    }

    $position = rand(1, POSITION_LIMIT);
    $step = rand(MIN_VALUE, MAX_VALUE);
    $indexOfHiddenValue = rand(0, LENGTH - 1);
    
    for ($i = 0; $i < LENGTH; $i++) {
        $progression[] = $position + $step * $i;
    }
    $correctAnswer = $progression[$indexOfHiddenValue];
    $progression[$indexOfHiddenValue] = '..';
    $question = implode($progression, ' ');
    return [$question, $correctAnswer];
}
