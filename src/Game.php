<?php

declare(strict_types=1);

class Game
{
    private $rolls = [21];
    private $currentRoll = 0;

    public function roll($pins)
    {
        $this->rolls[$this->currentRoll++] = $pins;
    }

    public function score()
    {
        $score = 0;
        $i = 0;
        for ($frame = 0; $frame < 10; $frame++) {
            if ($this->rolls[$i] + $this->rolls[$i + 1] === 10) {
                $score += 10 + $this->rolls[$i + 2];
                $i += 2;
            } else {
                $score += $this->rolls[$i] + $this->rolls[$i + 1];
                $i += 2;
            }
        }
        return $score;
    }

}