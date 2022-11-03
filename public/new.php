<?php

abstract class Figure
{
    abstract public function square();
}

class Circle extends Figure
{
    protected  $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function square()
    {
        // TODO: Implement square() method.
        return pi() * pow($this->radius, exponent: 2);
    }
}