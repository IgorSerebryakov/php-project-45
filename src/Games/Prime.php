<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\sample;

function start()
{
    $question = "Answer \"yes\" if given number prime. Otherwise answer \"no\".";
    $round = [];
    for ($i = 0; $i <= 2; $i++) {
        $char = rand(0, 10000);
        $correct = isPrime($char);
        $round[$char] = $correct;
    }
    sample($question, $round);
}

function isPrime($char)
{
    for ($i = 2; $i <= $char; $i++) {
        if ($char % $i == 0 && $char != $i) {
            $result = "no";
            break;
        } else {
            $result = "yes";
        }
    }
    return $result;
}
