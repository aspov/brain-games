<?php
namespace BrainGames\engine;

use function \cli\line;
use function \cli\prompt;
const ROUNDS_COUNT = 3;

function run($description, $getGameData)
{
    line('Welcome to the Brain Game!');
    line($description);
    line();
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        [$question, $correctAnswer] = $getGameData($i);
        line("Question: {$question}");
        $answer = prompt('Your answer');
        if ($answer != $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            exit;
        }
        line('Correct!');
    }
    line("Congratulations, {$name}!");
}
