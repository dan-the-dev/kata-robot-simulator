<?php

namespace Kata;

use Closure;

class RobotSimulator
{
    public function __construct(private Direction $direction = new North())
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
            $this->direction = $this->direction->right();
        };
    }
}
