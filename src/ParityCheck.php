<?php

namespace BrainGames\ParityCheck;

use function cli\line;
use function cli\prompt;

# greeting
line("Welcome to the Brain Games!");

# ask name
$name = prompt("May I have your name?", false, " ");
line("Hello, %s!", $name);

# condition
line("Answer \"yes\" if the number is even? otherwise answer \"no\".");

# game parity check
for ($i = 0; $i <= 2; $i++) {
    $number = rand(0, 100);
    line("Question: %s", $number);
    $answer = prompt("Your answer");

    if ($number % 2 == 0) {
        $correct = "yes";
    } else {
        $correct = "no";
    }

    if ($answer == $correct) {
        line("Correct!");
    } else {
        line("'$answer' is wrong answer ;(. Correct answer was '$correct'.");
        line("Let's try again, %s!", $name);
        break;
    }

    if ($i == 2 && $answer == $correct) {
        line("Congratulations, %s!", $name);
    }
}
