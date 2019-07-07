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
            $result = $num % 2 == 0 ? 'yes' : 'no';
            $answer = strtolower(\cli\prompt('Your answer'));
            if ($answer != $result) {
                line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
                return line("Let's try again, {$name}!");
            }
            line('Correct!');
            $endGame += 1;
        }
        line("Congratulations, {$name}!");
    }
}
