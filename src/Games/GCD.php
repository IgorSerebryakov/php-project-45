<?php

namespace BrainGames\GCD;

use function BrainGames\Engine\sample;

function start()
{
    $question = "Find the greatest common divisor of given numbers.";
    $round = [];
    for ($i = 0; $i <= 2; $i++) {
        $number_1 = rand(0, 100);
        $number_2 = rand(0, 100);
        $gcd = findgcd($number_1, $number_2);
        $example = "$number_1 $number_2";
        $round[$example] = $gcd;
    }
    sample($question, $round);
}

function findgcd($x, $y)
{
    while ($x != $y) {
        if ($x > $y) {
            $x = $x - $y;
        } else {
            $y = $y - $x;
        }
    }
    return $x;
}

