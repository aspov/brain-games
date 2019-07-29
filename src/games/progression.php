<?php
namespace BrainGames\games\progression;

use function BrainGames\cli\run;
const DESCRIPTION = 'What number is missing in the progression?';
const POSITION_LIMIT = 100;
const LENGTH = 10;
const MIN_VALUE = 1;
const MAX_VALUE = 5;

function startGame()
{
    $getGameData = function () {
        return getGameData();
    };
    run(DESCRIPTION, $getGameData);
}

function getGameData()
{
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
