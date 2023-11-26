<?php

namespace BrainGames\GCD;

use function BrainGames\Engine\getExecution;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";
function startGCD()
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        $gcd = findGCD($firstNum, $secondNum);
        $task = "{$firstNum} {$secondNum}";
        $rounds[$task] = $gcd;
    }

    getExecution(DESCRIPTION, $rounds);
}

function findGCD(int $firstNum, int $secondNum)
{
    while ($firstNum != $secondNum) {
        if ($firstNum > $secondNum) {
            $firstNum = $firstNum - $secondNum;
        } else {
            $secondNum = $secondNum - $firstNum;
        }
    }

    return $firstNum;
}
