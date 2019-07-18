<?php
namespace BrainGames\Games;

define("GAME_RULE", 'Answer "yes" if given number is prime. Otherwise answer "no".');
define("MIN_VALUE", 1);
define("MAX_VALUE", 100);

function play()
{
    $question = rand(MIN_VALUE, MAX_VALUE);
    $result = 'yes';
    for ($i = round($question / 2, 0, PHP_ROUND_HALF_DOWN); $i > 1; $i--) {
        if ($question % $i == 0) {
            $result = 'no';
            break;
        }
    }
    return [$question, $result];
}
