<?php

namespace Kata;

class RobotSimulator
{
    public function __construct(private string $direction = 'N')
    {
    }

    public function execute(): void
    {
        $this->direction = 'E';
    }

    public function direction(): string
    {
        return $this->direction;
    }
}
