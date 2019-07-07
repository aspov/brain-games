<?php
namespace BrainGames\Games;

use function \cli\line;

function gameStart($game)
{
    switch ($game) {
        case 'brain-even':
            $value = rand(1, 100);
            $result = $value % 2 == 0 ? 'yes' : 'no';
            return [$value, $result];
    }
}
