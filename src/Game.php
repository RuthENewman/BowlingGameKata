<?php

declare(strict_types=1);

class Game
{
    private $score = 0;

    public function roll($pins)
    {
        $this->score += $pins;
    }

    public function score()
    {
        return $this->score;
    }

}