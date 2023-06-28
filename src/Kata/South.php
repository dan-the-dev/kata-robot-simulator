<?php

namespace Kata;

class South implements Direction
{

    public function current(): string
    {
        return 'S';
    }

    public function right(): Direction
    {
        return new West();
    }

    public function left(): Direction
    {
        return new East();
    }

}