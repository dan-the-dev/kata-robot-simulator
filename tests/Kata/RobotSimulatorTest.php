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

    public function testTurnRight(): void
    {
        $this->robotSimulator->execute('R');

        $this->assertEquals('E', $this->robotSimulator->direction());
    }
}
