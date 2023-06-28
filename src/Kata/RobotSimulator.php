<?php

namespace Kata;

use Closure;

class RobotSimulator
{
    public function __construct(
        private Direction $direction = new North(),
        private int $x = 0,
        private int $y = 0,
    )
    {
    }

    public function execute(string $commands): void
    {
        $commandsList = str_split($commands);
        array_map($this->executeCommand(), $commandsList);
    }

    public function direction(): Direction
    {
        return $this->direction;
    }

    public function x(): int
    {
        return $this->x;
    }

    public function y(): int
    {
        return $this->y;
    }

    /**
     * @return Closure
     */
    private function executeCommand(): Closure
    {
        return function (string $command): void {
            if ($command === 'L') {
                $this->direction = $this->direction->left();
                return;
            }
            if ($command === 'R') {
                $this->direction = $this->direction->right();
                return;
            }
            // advance
            $this->x++;
        };
    }
}
