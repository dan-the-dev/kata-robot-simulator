<?php

namespace Kata;

class West implements Direction
{

    public function current(): string
    {
        return 'W';
    }

    public function right(): Direction
    {
        return new North();
    }

    public function left(): Direction
    {
        return new South();
    }
}