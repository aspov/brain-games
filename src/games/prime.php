<?php
namespace BrainGames\Games\Prime;

define("DESCRIPTION", 'Answer "yes" if given number is prime. Otherwise answer "no".');
define("MIN_VALUE", 1);
define("MAX_VALUE", 100);

function isPrime($number)
{
    for ($i = round($number / 2, 0, PHP_ROUND_HALF_DOWN); $i > 1; $i--) {
        if ($number % $i == 0) {
            return false;
        }
        return true;
    }
}

function play()
{
    $question = rand(MIN_VALUE, MAX_VALUE);
    $result = isPrime($question) ? 'yes' : 'no';
    return [$question, $result];
}
