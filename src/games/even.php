<?php
namespace BrainGames\Games\Even;

use function BrainGames\Cli\run;
const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';
const MIN_VALUE = 1;
const MAX_VALUE = 100;

function startGame()
{
    run(DESCRIPTION, __NAMESPACE__);
}

function isEven($number)
{
    return $number % 2 == 0 ? true : false;
}

function play()
{
    $question = rand(MIN_VALUE, MAX_VALUE);
    $result = isEven($question) ? 'yes' : 'no';
    return [$question, $result];
}
