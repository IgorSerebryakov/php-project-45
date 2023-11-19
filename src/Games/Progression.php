<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\sample;

function progression()
{
    $question = "What number is missing in the progression?";
    $round = [];
    for ($i = 0; $i <= 2; $i++) {
        $startElem = rand(0, 10);
        $lenProg = rand(5, 10);
        $PosHiddenElem = rand(0, $lenProg);
        $step = rand(1, 5);
        $progression = getProgression($lenProg, $startElem, $step);
        $correct = $progression[$PosHiddenElem];
        $progression[$PosHiddenElem] = "..";
        $example = implode(" ", $progression);
        $round[$example] = $correct;
    }
    sample($question, $round);
}

function getProgression(int $lenProg, int $startElem, int $step)
{
    $progression = [];
    $progression[] = $startElem;
    $nextChar = $startElem;
    for ($i = 0; $i <= $lenProg; $i++) {
        $nextChar = $nextChar + $step;
        $progression[] = $nextChar;
    }
    return $progression;
}
