<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function getExecution(string $description, array $rounds): void
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?", "", " ");
    line("Hello, %s!", $name);

    line($description);

    foreach ($rounds as $task => $correctAnswer) {
        line("Question: {$task}");
        $answer = prompt("Your answer");
        if ($answer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $name);
            exit;
        }
    }

    line("Congratulations, %s!", $name);
}
