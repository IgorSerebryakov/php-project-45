<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\getExecution;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = "What number is missing in the progression?";

function startProgressionGame()
{
    $round = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $startElem = rand(0, 10);
        $lenProgression = rand(5, 10);
        $posHiddenElem = rand(0, $lenProgression);
        $step = rand(1, 5);

        $progression = getProgression($lenProgression, $startElem, $step);

        $hiddenElem = $progression[$posHiddenElem];
        $progression[$posHiddenElem] = "..";

        $task = implode(" ", $progression);
        $round[$task] = $hiddenElem;
    }

    getExecution(DESCRIPTION, $round);
}

function getProgression(int $lenProgression, int $startElem, int $step)
{
    $progression = [];
    $progression[] = $startElem;
    $nextChar = $startElem;

    for ($i = 0; $i <= $lenProgression; $i++) {
        $nextChar = $nextChar + $step;
        $progression[] = $nextChar;
    }

    return $progression;
}
