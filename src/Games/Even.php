<?php

namespace BrainGames\Even;

use function BrainGames\Engine\sample;

function start()
{
    $question = "Answer \"yes\" if the number is even? otherwise answer \"no\".";
    $round = [];
    for ($i = 0; $i <= 2; $i++) {
        $example = rand(0, 100);
        $example % 2 == 0 ? $correct = "yes" : $correct = "no";
        $round[$example] = $correct;
        }
    sample($question, $round);
}
