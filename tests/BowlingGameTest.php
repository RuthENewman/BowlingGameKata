<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include 'src/Game.php';

class BowlingGameTest extends \PHPUnit\Framework\TestCase
{
    public function testGutterGame()
    {
        $game = new \Game();
        for($i = 0; $i < 20; $i++) {
            $game->roll(0);
        }
        $this->assertEquals(0, $game->score());
    }

    public function testAllOnes()
    {
        $game = new Game();
        for ($i = 0; $i < 20; $i++) {
            $game->roll(1);
        }
        $this->assertEquals(20, $game->score());
    }


}