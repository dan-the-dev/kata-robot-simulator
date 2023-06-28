<?php

namespace Kata;

use Closure;

class RobotSimulator
{
    public function __construct(private string $direction = 'N')
    {
    }

    public function execute(string $commands): void
    {
        $commandsList = str_split($commands);
        array_map($this->executeCommand(), $commandsList);
    }

    public function direction(): string
    {
        return $this->direction;
    }

    /**
     * @return Closure
     */
    private function executeCommand(): Closure
    {
        return function (string $command): void {

            $commandObj = null;
            switch ($this->direction) {
                case 'N':
                    $commandObj = new North();
                    break;
                case 'S':
                    $commandObj = new South();
                    break;
                case 'W':
                    $commandObj = new West();
                    break;
                case 'E':
                    $commandObj = new East();
                    break;
            }

            if ($command === 'L') {
                $newPosition = $commandObj->left();
                $this->direction = $newPosition->current();
                return;
            }
            $newPosition = $commandObj->right();
            $this->direction = $newPosition->current();
        };
    }
}
