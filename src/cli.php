<?php
namespace BrainGames\Cli;

use function \cli\line;

function gcd($a, $b)
{
    $r = $a % $b;
    return ($r != 0) ? gcd($b, $r) : $b;
}

function startGame($game)
{
    switch ($game) {
        case 'brain-even':
            return \BrainGames\Games\brainEven();
        case 'brain-calc':
            return \BrainGames\Games\brainCalc();
        case 'brain-gcd':
            return \BrainGames\Games\brainGcd();
        case 'brain-progression':
            return \BrainGames\Games\brainProgression();
        case 'brain-prime':
            return \BrainGames\Games\brainPrime();
    }
}

function getDescription($game)
{
    [$description, ,] = startGame($game);
    return $description;
}

function newRound($game)
{
    [, $question, $result] = startGame($game);
    return [$question, $result];
}

function run($game = '')
{
    line('Welcome to the Brain Game!');
    if (!empty($game)) {
        line(getDescription($game));
    }

    line();
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    
    if (empty($game)) {
        return null;
    }
    
    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        $round = newRound($game);
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
