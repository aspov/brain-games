<?php
namespace BrainGames\Games\Even;

define("DESCRIPTION", 'Answer "yes" if number even otherwise answer "no".');
define("MIN_VALUE", 1);
define("MAX_VALUE", 100);

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
