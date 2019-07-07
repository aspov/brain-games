<?php
namespace BrainGames\Cli;

use function cli\line;
use function BrainGames\Games\gameStart;

function greeting()
{
    line('Welcome to the Brain Game!');
}

function toAskName()
{
    $name = \cli\prompt('May I have your name?');
    return $name;
}

function sayHello($name)
{
    line("Hello, %s!", $name);
}

function run($game = '')
{
    if ($game == 'brain-even') {
        greeting();
        line('Answer "yes" if number even otherwise answer "no".');
        line();
        $name = toAskName();
        sayHello($name);
        gameStart($game, $name);
    } else {
        greeting();
        line();
        $name = toAskName();
        sayHello($name);
    }
}
