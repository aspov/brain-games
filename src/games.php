<?php
namespace BrainGames\Games;

use function \cli\line;

function gameStart($game, $name)
{
    if ($game == 'brain-even') {
        $endGame = 0;
        while ($endGame < 3) {
            $num = rand(1, 100);
            line("Question: {$num}");
            if ($num % 2 == 0) {
                $result = 'yes';
            } else {
                $result = 'no';
            }
            $answer = \cli\prompt('Your answer');
            if (strtolower($answer) == $result) {
                line('Correct!');
                $endGame += 1;
            } else {
                line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
                return line("Let's try again, {$name}!");
            }
        }
        line("Congratulations, {$name}!");
    }
}
