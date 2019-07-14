<?php
namespace BrainGames\Games;

function BrainProgression()
{
    $description = 'What number is missing in the progression?';
    $startNum = rand(1, 100);
    $step = rand(1, 5);
    $hiddenNum = rand(0, 9);
    $progressionCount = 10;
    for ($i = 0; $i < $progressionCount; $i++) {
        $value[] = $startNum;
        $startNum = $startNum + $step;
    }
    $result = $value[$hiddenNum];
    $value[$hiddenNum] = '..';
    return [$description, implode($value, ' '), $result];
}
