<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include 'src/Game.php';

class BowlingGameTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp() {
        $this->game = new \Game();
    }

    public function testGutterGame()
    {
        for($i = 0; $i < 20; $i++) {
            $this->game->roll(0);
        }
        $this->assertEquals(0, $this->game->score());
    }

    public function testAllOnes()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->game->roll(1);
        }
        $this->assertEquals(20, $this->game->score());
    }


}