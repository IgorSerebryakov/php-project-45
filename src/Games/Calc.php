<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\sample;

function calc()
{
    $question = "What is the result of the expression?";
    $rounds = [];
    for ($i = 0; $i <= 2; $i++) {
        $num_1 = rand(0, 100);
        $num_2 = rand(0, 100);
        switch ($i) {
            case 0:
                $example = "{$num_1} + {$num_2}";
                $correctAnswer = $num_1 + $num_2;
                $rounds[$example] = $correctAnswer;
                break;
            case 1:
                $example = "{$num_1} - {$num_2}";
                $correctAnswer = $num_1 - $num_2;
                $rounds[$example] = $correctAnswer;
                break;
            case 2:
                $example = "{$num_1} * {$num_2}";
                $correctAnswer = $num_1 * $num_2;
                $rounds[$example] = $correctAnswer;
                break;
        }
    }
    sample($question, $rounds);
}
