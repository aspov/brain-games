<?php
namespace BrainGames\games\prime;

use function BrainGames\cli\run;
const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN_VALUE = 1;
const MAX_VALUE = 100;

function startGame()
{
    $getGameData = function () {
        return getGameData();
    };
    run(DESCRIPTION, $getGameData);
}

function isPrime($number)
{
    for ($i = round($number / 2, 0, PHP_ROUND_HALF_DOWN); $i > 1; $i--) {
        if ($number % $i == 0) {
            return false;
        }
        return true;
    }
}

function getGameData()
{
    $question = rand(MIN_VALUE, MAX_VALUE);
    $correctAnswer = isPrime($question) ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
