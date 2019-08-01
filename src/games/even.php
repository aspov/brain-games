<?php
namespace BrainGames\games\even;

use function BrainGames\engine\run;
const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';
const MIN_VALUE = 1;
const MAX_VALUE = 100;


function isEven($number)
{
    return $number % 2 == 0 ? true : false;
}

function startGame($round = false)
{
    if (!$round) {
        $getGameData = function ($round) {
            return startGame($round);
        };
        run(DESCRIPTION, $getGameData);
    }

    $question = rand(MIN_VALUE, MAX_VALUE);
    $correctAnswer = isEven($question) ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
