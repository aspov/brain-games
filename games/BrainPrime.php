<?php
namespace BrainGames\Games;

function BrainPrime()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $value = rand(1, 100);
    $result = 'yes';
    for ($i = round($value / 2, 0, PHP_ROUND_HALF_DOWN); $i > 1; $i--) {
        if ($value % $i == 0) {
            $result = 'no';
            break;
        }
    }
    return [$description, $value, $result];
}
