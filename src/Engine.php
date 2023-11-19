<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function sample($question, $rounds)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?", false, " ");
    line("Hello, %s!", $name);
    line($question);
    foreach ($rounds as $example => $correctAnswer) {
        line("Question: %s", $example);
        $answer = prompt("Your answer");
        if ($answer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($answer == $correctAnswer) {
        line("Congratulations, %s!", $name);
    }
}