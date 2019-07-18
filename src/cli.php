<?php
namespace BrainGames\Cli;

use function \cli\line;

function run()
{
    line('Welcome to the Brain Game!');
    if (defined('GAME_RULE')) {
        line(GAME_RULE);
    }

    line();
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    
    if (!defined('GAME_PATH')) {
        return null;
    }
    
    $roundsCount = 3;
    for ($i = 0; $i < $roundsCount; $i++) {
        $round = \BrainGames\Games\play();
        [$question, $result] = $round;
        line("Question: {$question}");
        $answer = strtolower(\cli\prompt('Your answer'));
        if ($answer != $result) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
            return line("Let's try again, {$name}!");
        }
        line('Correct!');
    }
    line("Congratulations, {$name}!");
}
