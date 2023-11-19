<?php

namespace BrainGames\Even;

use function BrainGames\Engine\sample;

function isEven()
{
    $question = "Answer \"yes\" if the number is even? otherwise answer \"no\".";
    $rounds = [];
    for ($i = 0; $i <= 2; $i++) {
        $num = rand(0, 100);
        $num % 2 == 0 ? $correctAnswer = "yes" : $correctAnswer = "no";
        $rounds[$num] = $correctAnswer;
        }
    sample($question, $rounds);
}
