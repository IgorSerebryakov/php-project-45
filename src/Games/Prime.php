<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\getExecution;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
function startPrime(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num = rand(0, 20);
        $correctAnswer = isPrime($num);
        $rounds[$num] = $correctAnswer;
    }

    getExecution(DESCRIPTION, $rounds);
}

function isPrime(int $num): string
{
    $result = "";
    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i == 0 && $num != $i) {
            $result = "no";
            break;
        } else {
            $result = "yes";
        }
    }

    return $result;
}
