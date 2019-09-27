<?php

declare(strict_types=1);

namespace BowlingGame;

use PHPUnit\Framework\TestCase;
use src\Game;

class BowlingGameTest extends \PHPUnit\Framework\TestCase
{
    public function testGutterGame()
    {
        $game = new Game();
        for($i = 0; $i < 20; $i++) {
            $game->roll(0);
        }
        assertEquals(0, $game->score());
    }


}