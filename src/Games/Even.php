<?php

namespace BrainGames\Even;

use function BrainGames\Engine\getExecution;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function startEvenGame()
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num = rand(1, 100);
        $correctAnswer = isEven($num) ? "yes" : "no";
        $rounds["{$num}"] = $correctAnswer;
    }

    getExecution(DESCRIPTION, $rounds);
}

function isEven(int $num)
{
    return $num % 2 == 0;
}
