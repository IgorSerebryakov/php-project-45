<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\sample;

function prime()
{
    $question = "Answer \"yes\" if given number prime. Otherwise answer \"no\".";
    $rounds = [];
    for ($i = 0; $i <= 2; $i++) {
        $num = rand(0, 10000);
        $correctAnswer = isPrime($num);
        $rounds[$num] = $correctAnswer;
    }
    sample($question, $rounds);
}

function isPrime($num)
{
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
