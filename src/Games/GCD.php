<?php

namespace BrainGames\GCD;

use function BrainGames\Engine\sample;

function gcd()
{
    $question = "Find the greatest common divisor of given numbers.";
    $rounds = [];
    for ($i = 0; $i <= 2; $i++) {
        $num_1 = rand(0, 100);
        $num_2 = rand(0, 100);
        $gcd = findgcd($num_1, $num_2);
        $example = "{$num_1} {$num_2}";
        $rounds[$example] = $gcd;
    }
    sample($question, $rounds);
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
