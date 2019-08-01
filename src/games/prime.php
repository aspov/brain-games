<?php
namespace BrainGames\games\prime;

use function BrainGames\engine\run;
const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN_VALUE = 1;
const MAX_VALUE = 100;

function isPrime($number)
{
    for ($i = round($number / 2, 0, PHP_ROUND_HALF_DOWN); $i > 1; $i--) {
        if ($number % $i == 0) {
            return false;
        }
        return true;
    }
}

function startGame($round = false)
{
    $getGameData = function ($round) {
        return startGame($round);
    };
    
    if (!$round) {
        return run(DESCRIPTION, $getGameData);
    }

    $question = rand(MIN_VALUE, MAX_VALUE);
    $correctAnswer = isPrime($question) ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
