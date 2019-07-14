<?php
namespace BrainGames\Cli;

use function \cli\line;

function getGameResult($game)
{
    $game == 'brain-even' ? $result =  \BrainGames\Games\BrainEven() : null;
    $game == 'brain-calc' ? $result = \BrainGames\Games\BrainCalc() : null;
    $game == 'brain-gcd' ? $result = \BrainGames\Games\BrainGcd() : null;
    $game == 'brain-progression' ? $result = \BrainGames\Games\BrainProgression() : null;
    $game == 'brain-prime' ? $result =  \BrainGames\Games\BrainPrime() : null;
    return $result;
}

function getDescription($game)
{
    [$description, ,] = getGameResult($game);
    return $description;
}

function getNewRound($game)
{
    [, $question, $result] = getGameResult($game);
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
        $round = getNewRound($game);
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
