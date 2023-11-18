<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\sample;

function start()
{
    $question = "What number is missing in the progression?";
    $round = [];
    for ($i = 0; $i <= 2; $i++) {
        $startChar = rand(0, 10);
        $lenProg = rand(5, 10);
        $PosHiddenElem = rand(0, $lenProg);
        $step = rand(1, 5);
        $progression = getProgression($lenProg, $startChar, $step);
        $correct = $progression[$PosHiddenElem];
        $progression[$PosHiddenElem] = "..";
        $example = implode(" ", $progression);
        $round[$example] = $correct;
    }
    sample($question, $round);
}

function getProgression($lenProg, $startChar, $step)
{
    $progression[] = $startChar;
    $nextChar = $startChar;
    for ($i = 0; $i <= $lenProg; $i++) {
        $nextChar = $nextChar + $step;
        $progression[] = $nextChar;
    }
    return $progression;
}