<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include 'src/Game.php';

class BowlingGameTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp() {
        $this->game = new \Game();
    }

    private function rollMany($n, $pins)
    {
        for($i = 0; $i < $n; $i++) {
            $this->game->roll($pins);
        }
    }

    public function testGutterGame()
    {
        $this->rollMany(20, 0);
        $this->assertEquals(0, $this->game->score());
    }

    public function testAllOnes()
    {
        $this->rollMany(20,1);
        $this->assertEquals(20, $this->game->score());
    }

    public function testOneSpare()
    {
        $this->rollSpare();
        $this->game->roll(3);
        $this->rollMany(17,0);
        $this->assertEquals(16, $this->game->score());
    }

    public function testOneStrike()
    {
        $this->rollStrike();
        $this->game->roll(3);
        $this->game->roll(4);
        $this->rollMany(16, 0);
        $this->assertEquals(24, $this->game->score());
    }

    public function testPerfectGame()
    {
        $this->rollMany(12,10);
        $this->assertEquals(300, $this->game->score());
    }

    private function rollStrike()
    {
        $this->game->roll(10);
    }

    private function rollSpare()
    {
        $this->game->roll(5);
        $this->game->roll(5);
    }


}