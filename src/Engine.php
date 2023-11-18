<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function sample($question, $round)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?", false, " ");
    line("Hello, %s!", $name);
    line($question);
    foreach ($round as $example => $correct) {
        line("Question: %s", $example);
        $answer = prompt("Your answer");
        if ($answer == $correct) {
            line("Correct!");
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correct'.");
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($answer == $correct) {
        line("Congratulations, %s!", $name);
    }
}