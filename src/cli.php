<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;
const ROUNDS_COUNT = 3;

function run($description = "", $gameNamespace = "")
{
    line('Welcome to the Brain Game!');
    if (!empty($description)) {
        line($description);
    }

    line();
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    
    if (empty($gameNamespace)) {
        return null;
    }
    
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $playFunction = $gameNamespace . "\play";
        [$question, $result] = $playFunction();
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
