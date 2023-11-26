<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\getExecution;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = "What is the result of the expression?";

function startCalc()
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $mathOperators = ['+', '-', '*'];
        $firstNum = rand(0, 20);
        $secondNum = rand(0, 20);
        $operator = $mathOperators[$i];

        $task = "{$firstNum} {$operator} {$secondNum}";
        $calcResult = calculate($firstNum, $secondNum, $operator);

        $rounds[$task] = $calcResult;
    }

    getExecution(DESCRIPTION, $rounds);
}

function calculate(int $firstNum, int $secondNum, string $operator)
{
    $result = 0;
    switch ($operator) {
        case '+':
            $result = $firstNum + $secondNum;
            break;
        case '-':
            $result = $firstNum - $secondNum;
            break;
        case '*':
            $result = $firstNum * $secondNum;
            break;
    }

    return $result;
}
