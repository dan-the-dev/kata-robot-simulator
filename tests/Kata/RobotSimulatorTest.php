<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\RobotSimulator;

class RobotSimulatorTest extends TestCase
{
    protected function setUp(): void
    {
        $this->robotSimulator = new RobotSimulator();
    }

    public function testTurnRightOneTime(): void
    {
        $this->robotSimulator->execute('R');

        $this->assertEquals(new East(), $this->robotSimulator->direction());
    }

    public function testTurnRightTwoTimes(): void
    {
        $this->robotSimulator->execute('RR');

        $this->assertEquals(new South(), $this->robotSimulator->direction());
    }

    public function testTurnRightThreeTimes(): void
    {
        $this->robotSimulator->execute('RRR');

        $this->assertEquals(new West(), $this->robotSimulator->direction());
    }

    public function testTurnRightFourTimes(): void
    {
        $this->robotSimulator->execute('RRRR');

        $this->assertEquals(new North(), $this->robotSimulator->direction());
    }

    public function testTurnLeftOneTime(): void
    {
        $this->robotSimulator->execute('L');

        $this->assertEquals(new West(), $this->robotSimulator->direction());
    }
}
