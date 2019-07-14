<?php
namespace BrainGames\Games;

function BrainEven()
{
    $description = 'Answer "yes" if number even otherwise answer "no".';
    $value = rand(1, 100);
    $result = $value % 2 == 0 ? 'yes' : 'no';
    return [$description, $value, $result];
}
