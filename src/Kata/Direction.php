<?php

namespace Kata;

interface Direction
{
    public function current(): string;
    public function right(): Direction;
    public function left(): Direction;
}