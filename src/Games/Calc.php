<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\sample;

function start()
{
    $question = "What is the result of the expression?";
    $round = [];
    for ($i = 0; $i <= 2; $i++) {
        $number_1 = rand(0, 100);
        $number_2 = rand(0, 100);
        switch ($i) {
            case 0:
                $example = "$number_1 + $number_2";
                $correct = $number_1 + $number_2;
                $round[$example] = $correct;
                break;
            case 1:
                $example = "$number_1 - $number_2";
                $correct = $number_1 - $number_2;
                $round[$example] = $correct;
                break;
            case 2:
                $example = "$number_1 * $number_2";
                $correct = $number_1 * $number_2;
                $round[$example] = $correct;
                break;
        }
    }
    sample($question, $round);
}
