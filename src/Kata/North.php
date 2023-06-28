<?php

namespace Kata;

class North implements Direction
{

    public function current(): string
    {
        return 'N';
    }

    public function right(): Direction
    {
        return new East();
    }

    public function left(): Direction
    {
        return new West();
    }
}