<?php

namespace Kata;

class East implements Direction
{

    public function current(): string
    {
        return 'E';
    }

    public function right(): Direction
    {
        return new South();
    }

    public function left(): Direction
    {
        return new North();
    }

}