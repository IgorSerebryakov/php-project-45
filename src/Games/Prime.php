<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\getExecution;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function startPrimeGame()
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num = rand(2, 100);
        $correctAnswer = isPrime($num) ? "yes" : "no";
        $rounds["{$num}"] = $correctAnswer;
    }

    getExecution(DESCRIPTION, $rounds);
}

function isPrime(int $num)
{
    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i == 0 && $num != $i) {
            return false;
        }
    }

    return true;
}
