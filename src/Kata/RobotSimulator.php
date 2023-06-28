<?php

namespace Kata;

class RobotSimulator
{
    public function __construct(private string $direction = 'N')
    {
    }

    public function execute(string $command): void
    {
        if ($command === 'RRR') {
            $this->direction = 'W';
            return;
        }
        if ($command === 'RR') {
            $this->direction = 'S';
            return;
        }
        if ($command === 'L') {
            $this->direction = 'W';
            return;
        }
        $this->direction = 'E';
    }

    public function direction(): string
    {
        return $this->direction;
    }
}
