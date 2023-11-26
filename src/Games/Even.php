<?php

namespace BrainGames\Even;

use function BrainGames\Engine\getExecution;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function startEven(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num = rand(0, 20);
        $correctAnswer = isEven($num);
        $rounds[$num] = $correctAnswer;
    }

    getExecution(DESCRIPTION, $rounds);
}

function isEven($num): string
{
    return $num % 2 == 0 ? "yes" : "no";
}
