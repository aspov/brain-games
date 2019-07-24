<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    if (defined('DESCRIPTION')) {
        line(DESCRIPTION);
    }

    line();
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    
    if (!defined('GAME_PATH')) {
        return null;
    }
    
    $roundsCount = 3;
    for ($i = 0; $i < $roundsCount; $i++) {
        $round = \BrainGames\Games\play();
        [$question, $result] = $round;
        line("Question: {$question}");
        $answer = prompt('Your answer');
        if ($answer != $result) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
            line("Let's try again, {$name}!");
            return null;
        }
        line('Correct!');
    }
    line("Congratulations, {$name}!");
}
